// HappyHive Child Care Subsidy Calculator JS (WordPress)
// Ported from original subsidyCalculator.js

class SubsidyCalculator {
    constructor() {
        this.currentStep = 1;
        this.totalSteps = 4;
        this.formData = {};
        this.childrenData = [];
        this.currentTimeframe = 'weekly';
        this.subsidyRates = {
            brackets: [
                { min: 0, max: 80000, rate: 0.90 },
                { min: 80001, max: 530000, rate: 0.85 },
                { min: 530001, max: 535279, rate: 0.80 }
            ]
        };
        this.init();
    }

    init() {
        this.bindEvents();
        this.updateNavigation();
        this.setupIncomeSlider();
        this.setupChildSelection();
        this.setupSessionOptions();
        this.setupDaysSelection();
        this.setupTimeframeTabs();
    }

    bindEvents() {
        document.querySelectorAll('.c-numeric-nav-button').forEach(button => {
            button.addEventListener('click', (e) => {
                const step = parseInt(e.currentTarget.dataset.step);
                if (step <= this.currentStep) {
                    this.goToStep(step);
                }
            });
        });

        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                this.updateRadioLabels(e.target);
                this.saveFormData();
            });
        });

        document.addEventListener('change', (e) => {
            if (e.target.matches('input, select')) {
                this.saveFormData();
            }
        });

        document.addEventListener('input', (e) => {
            if (e.target.matches('input, select')) {
                this.saveFormData();
            }
        });
    }

    setupIncomeSlider() {
        const slider = document.getElementById('income-slider');
        const display = document.getElementById('income-display');
        const hiddenInput = document.getElementById('family-income');

        if (slider && display && hiddenInput) {
            slider.addEventListener('input', (e) => {
                const value = parseInt(e.target.value);
                const formattedValue = this.formatCurrency(value);
                display.textContent = formattedValue;
                hiddenInput.value = value;
                this.saveFormData();
            });
        }
    }

    setupChildSelection() {
        document.querySelectorAll('.child-count-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const count = parseInt(e.target.dataset.count);
                this.selectChildCount(count);
            });
        });
    }

    setupSessionOptions() {
        document.addEventListener('click', (e) => {
            if (e.target.closest('.session-option')) {
                const option = e.target.closest('.session-option');
                const sessionLength = option.dataset.session;
                const childForm = option.closest('.child-form');
                const childId = childForm.id.split('-')[2];

                childForm.querySelectorAll('.session-option').forEach(function(opt) {
                    opt.classList.remove('active');
                });

                option.classList.add('active');

                const hiddenInput = document.getElementById('child' + childId + '-session');
                if (hiddenInput) {
                    hiddenInput.value = sessionLength;
                }

                this.saveFormData();
            }
        });
    }

    setupDaysSelection() {
        document.addEventListener('click', (e) => {
            if (e.target.matches('.day-btn')) {
                e.target.classList.toggle('active');
                this.saveFormData();
            }
        });
    }

    setupTimeframeTabs() {
        document.querySelectorAll('.timeframe-tab').forEach(tab => {
            tab.addEventListener('click', (e) => {
                const period = e.target.dataset.period;
                this.switchTimeframe(period);
            });
        });
    }

    selectChildCount(count) {
        document.querySelectorAll('.child-count-btn').forEach(function(btn) {
            btn.classList.remove('active');
            if (parseInt(btn.dataset.count) === count) {
                btn.classList.add('active');
            }
        });

        const childCountInput = document.getElementById('child-count');
        if (childCountInput) {
            childCountInput.value = count;
        }

        const multiChildInfo = document.getElementById('multi-child-info');
        if (multiChildInfo) {
            multiChildInfo.style.display = count > 1 ? 'block' : 'none';
        }

        this.generateChildForms(count);
        this.saveFormData();
    }

    generateChildForms(count) {
        const existingForms = document.querySelectorAll('.child-form');
        existingForms.forEach((form, index) => {
            if (index > 0) {
                form.remove();
            }
        });

        for (let i = 2; i <= count; i++) {
            const form = this.createChildForm(i);
            const childForm1 = document.getElementById('child-form-1');
            childForm1.parentNode.insertBefore(form, childForm1.nextSibling);
        }
    }

    createChildForm(childNumber) {
        const form = document.createElement('div');
        form.className = 'child-form';
        form.id = 'child-form-' + childNumber;
        form.innerHTML =
            '<div class="child-form-header">' +
            '<span class="child-form-title">Child ' + childNumber + '</span>' +
            '<button class="collapse-btn" onclick="toggleChildForm(' + childNumber + ')">▲</button>' +
            '</div>' +
            '<div class="child-form-content">' +
            '<div class="c-input-group">' +
            '<label class="c-sc-label" for="child' + childNumber + '-dob">Date of birth</label>' +
            '<input type="date" class="c-sc-field" id="child' + childNumber + '-dob">' +
            '</div>' +
            '<div class="days-selection">' +
            '<div class="week-label">Fortnightly days in long day care</div>' +
            '<div class="week-label">Week 1</div>' +
            '<div class="days-row">' +
            '<button class="day-btn" data-day="mon">Mon</button>' +
            '<button class="day-btn" data-day="tue">Tue</button>' +
            '<button class="day-btn" data-day="wed">Wed</button>' +
            '<button class="day-btn" data-day="thu">Thu</button>' +
            '<button class="day-btn" data-day="fri">Fri</button>' +
            '</div>' +
            '<div class="week-label">Week 2</div>' +
            '<div class="days-row">' +
            '<button class="day-btn" data-day="mon">Mon</button>' +
            '<button class="day-btn" data-day="tue">Tue</button>' +
            '<button class="day-btn" data-day="wed">Wed</button>' +
            '<button class="day-btn" data-day="thu">Thu</button>' +
            '<button class="day-btn" data-day="fri">Fri</button>' +
            '</div>' +
            '</div>' +
            '<div class="c-input-group">' +
            '<label class="c-sc-label">Hours per day</label>' +
            '<div class="session-options">' +
            '<div class="session-option active" data-session="10">' +
            '<div style="font-weight: 600;">10 hour session</div>' +
            '<div style="font-size: 14px; color: #6c757d;">7:00 AM - 5:00 PM</div>' +
            '</div>' +
            '<div class="session-option" data-session="12">' +
            '<div style="font-weight: 600;">All day session</div>' +
            '<div style="font-size: 14px; color: #6c757d;">7:00 AM - 7:00 PM</div>' +
            '</div>' +
            '</div>' +
            '<input type="hidden" id="child' + childNumber + '-session" value="10">' +
            '</div>' +
            '<div class="c-input-group">' +
            '<label class="c-sc-label" for="child' + childNumber + '-fees">Fees per day</label>' +
            '<div style="position: relative;">' +
            '<span style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;">$</span>' +
            '<input type="number" class="c-sc-field" id="child' + childNumber + '-fees" placeholder="Enter the daily fee" style="padding-left: 30px;">' +
            '</div>' +
            '<div style="margin-top: 10px;">' +
            '<a href="#" style="color: #007bff; text-decoration: none; font-size: 14px;">' +
            '<span style="color: #007bff; cursor: help;">ⓘ</span> Don\'t know your daily rate for child care?' +
            '</a>' +
            '</div>' +
            '</div>' +
            '</div>';
        return form;
    }

    switchTimeframe(period) {
        this.currentTimeframe = period;
        document.querySelectorAll('.timeframe-tab').forEach(tab => {
            tab.classList.remove('active');
            if (tab.dataset.period === period) {
                tab.classList.add('active');
            }
        });
        if (this.currentStep === 4) {
            this.calculateSubsidy();
        }
    }

    updateRadioLabels(selectedRadio) {
        const name = selectedRadio.name;
        document.querySelectorAll(`input[name="${name}"]`).forEach(radio => {
            const label = document.querySelector(`label[for="${radio.id}"]`);
            if (label) {
                label.classList.remove('active');
            }
        });
        const selectedLabel = document.querySelector(`label[for="${selectedRadio.id}"]`);
        if (selectedLabel) {
            selectedLabel.classList.add('active');
        }
    }

    saveFormData() {
        const inputs = document.querySelectorAll('input, select');
        for (let i = 0; i < inputs.length; i++) {
            const input = inputs[i];
            if (input.type === 'radio') {
                if (input.checked) {
                    this.formData[input.name] = input.value;
                }
            } else {
                this.formData[input.id] = input.value;
            }
        }
        this.saveChildrenData();
    }

    saveChildrenData() {
        const childCount = parseInt(document.getElementById('child-count').value) || 1;
        this.childrenData = [];
        for (let i = 1; i <= childCount; i++) {
            const dobElement = document.getElementById('child' + i + '-dob');
            const sessionElement = document.getElementById('child' + i + '-session');
            const feesElement = document.getElementById('child' + i + '-fees');
            const childData = {
                id: i,
                dob: dobElement ? dobElement.value : '',
                sessionLength: sessionElement ? sessionElement.value : '10',
                dailyFees: feesElement ? parseFloat(feesElement.value) || 0 : 0,
                selectedDays: this.getSelectedDays(i)
            };
            this.childrenData.push(childData);
        }
    }

    getSelectedDays(childNumber) {
        const childForm = document.getElementById('child-form-' + childNumber);
        const selectedDays = [];
        if (childForm) {
            const dayButtons = childForm.querySelectorAll('.day-btn.active');
            for (let i = 0; i < dayButtons.length; i++) {
                selectedDays.push(dayButtons[i].dataset.day);
            }
        }
        return selectedDays;
    }

    validateCurrentStep() {
        switch (this.currentStep) {
            case 1:
                return this.formData['user-location'] && this.formData['indigenous'];
            case 2:
                return this.formData['family-income'] && this.formData['activity-hours'];
            case 3:
                return this.validateChildrenData();
            default:
                return true;
        }
    }

    validateChildrenData() {
        const childCount = parseInt(this.formData['child-count']) || 1;
        for (let i = 1; i <= childCount; i++) {
            const dob = this.formData['child' + i + '-dob'];
            const fees = this.formData['child' + i + '-fees'];
            const selectedDays = this.getSelectedDays(i);
            if (!dob || !fees || selectedDays.length === 0) {
                return false;
            }
        }
        return true;
    }

    nextStep() {
        if (!this.validateCurrentStep()) {
            alert('Please fill in all required fields before continuing.');
            return;
        }
        if (this.currentStep < this.totalSteps) {
            this.currentStep++;
            this.showStep(this.currentStep);
            this.updateNavigation();
        }
    }

    prevStep() {
        if (this.currentStep > 1) {
            this.currentStep--;
            this.showStep(this.currentStep);
            this.updateNavigation();
        }
    }

    goToStep(step) {
        if (step >= 1 && step <= this.totalSteps) {
            this.currentStep = step;
            this.showStep(this.currentStep);
            this.updateNavigation();
        }
    }

    showStep(step) {
        document.querySelectorAll('.step').forEach(stepEl => {
            stepEl.classList.remove('active');
        });
        const currentStepEl = document.getElementById(`step-${step}`);
        if (currentStepEl) {
            currentStepEl.classList.add('active');
        }
        if (step === 4) {
            this.calculateSubsidy();
        }
    }

    updateNavigation() {
        document.querySelectorAll('.c-numeric-nav-button').forEach((button, index) => {
            const stepNumber = index + 1;
            button.classList.remove('c-numeric-nav-button--current');
            if (stepNumber === this.currentStep) {
                button.classList.add('c-numeric-nav-button--current');
            }
            if (stepNumber <= this.currentStep) {
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        });
    }

    calculateSubsidy() {
        try {
            const income = parseFloat(this.formData['family-income']) || 0;
            const activityHours = parseInt(this.formData['activity-hours']) || 0;
            let subsidyRate = 0;
            for (const bracket of this.subsidyRates.brackets) {
                if (income >= bracket.min && income <= bracket.max) {
                    subsidyRate = bracket.rate;
                    break;
                }
            }
            let totalWeeklyFees = 0;
            let totalWeeklySubsidy = 0;
            let hasMultipleChildren = this.childrenData.length > 1;
            this.childrenData.forEach((child, index) => {
                const childSubsidyRate = this.getChildSubsidyRate(subsidyRate, index, hasMultipleChildren);
                const weeklyHours = this.calculateWeeklyHours(child, activityHours);
                const dailyRate = child.dailyFees;
                const weeklyCost = this.calculateWeeklyCost(child, dailyRate);
                const weeklySubsidy = weeklyCost * childSubsidyRate;
                totalWeeklyFees += weeklyCost;
                totalWeeklySubsidy += weeklySubsidy;
            });
            const totalOutOfPocket = totalWeeklyFees - totalWeeklySubsidy;
            this.displayResults({
                totalWeeklyFees: Math.round(totalWeeklyFees),
                totalWeeklySubsidy: Math.round(totalWeeklySubsidy),
                totalOutOfPocket: Math.round(totalOutOfPocket),
                baseRate: Math.round(subsidyRate * 100),
                hasMultipleChildren: hasMultipleChildren
            });
        } catch (error) {
            this.displayError();
        }
    }

    getChildSubsidyRate(baseRate, childIndex, hasMultipleChildren) {
        if (hasMultipleChildren && childIndex > 0) {
            return Math.min(baseRate + 0.10, 0.95);
        }
        return baseRate;
    }

    calculateWeeklyHours(child, activityHours) {
        const selectedDays = child.selectedDays;
        const sessionLength = parseInt(child.sessionLength);
        const daysPerWeek = selectedDays.length / 2;
        const weeklyHours = daysPerWeek * sessionLength;
        if (activityHours >= 100) {
            return Math.min(weeklyHours, 100);
        } else if (activityHours >= 24) {
            return Math.min(weeklyHours, 72);
        } else {
            return Math.min(weeklyHours, 24);
        }
    }

    calculateWeeklyCost(child, dailyRate) {
        const selectedDays = child.selectedDays;
        const daysPerWeek = selectedDays.length / 2;
        return daysPerWeek * dailyRate;
    }

    displayResults(results) {
        const timeframe = this.currentTimeframe;
        const multiplier = this.getTimeframeMultiplier(timeframe);
        document.getElementById('total-fees').innerHTML = this.formatCurrency(results.totalWeeklyFees * multiplier) + '<span class="cost-period">' + timeframe + '</span>';
        document.getElementById('estimated-subsidy').innerHTML = this.formatCurrency(results.totalWeeklySubsidy * multiplier) + '<span class="cost-period">' + timeframe + '</span>';
        document.getElementById('out-of-pocket').innerHTML = this.formatCurrency(results.totalOutOfPocket * multiplier) + '<span class="cost-period">' + timeframe + '</span>';
        document.getElementById('week1-subsidy').textContent = this.formatCurrency(Math.round(results.totalWeeklySubsidy * 0.5));
        document.getElementById('week1-out-of-pocket').textContent = this.formatCurrency(Math.round(results.totalOutOfPocket * 0.5));
        document.getElementById('week2-subsidy').textContent = this.formatCurrency(Math.round(results.totalWeeklySubsidy * 0.5));
        document.getElementById('week2-out-of-pocket').textContent = this.formatCurrency(Math.round(results.totalOutOfPocket * 0.5));
        const multiChildInfo = document.getElementById('results-multi-child');
        if (multiChildInfo) {
            multiChildInfo.style.display = results.hasMultipleChildren ? 'block' : 'none';
        }
    }

    getTimeframeMultiplier(timeframe) {
        switch (timeframe) {
            case 'weekly':
                return 1;
            case 'fortnightly':
                return 2;
            case 'monthly':
                return 4.33;
            case 'yearly':
                return 52;
            default:
                return 1;
        }
    }

    formatCurrency(amount) {
        return '$' + amount.toLocaleString();
    }

    displayError() {
        document.getElementById('total-fees').innerHTML = '$0<span class="cost-period">week</span>';
        document.getElementById('estimated-subsidy').innerHTML = '$0<span class="cost-period">week</span>';
        document.getElementById('out-of-pocket').innerHTML = '$0<span class="cost-period">week</span>';
        document.getElementById('week1-subsidy').textContent = '$0';
        document.getElementById('week1-out-of-pocket').textContent = '$0';
        document.getElementById('week2-subsidy').textContent = '$0';
        document.getElementById('week2-out-of-pocket').textContent = '$0';
    }

    reset() {
        this.currentStep = 1;
        this.formData = {};
        this.childrenData = [];
        this.currentTimeframe = 'weekly';
        document.querySelectorAll('input, select').forEach(input => {
            if (input.type === 'radio') {
                input.checked = false;
            } else {
                input.value = '';
            }
        });
        const slider = document.getElementById('income-slider');
        const display = document.getElementById('income-display');
        const hiddenInput = document.getElementById('family-income');
        if (slider && display && hiddenInput) {
            slider.value = 85000;
            display.textContent = '$ 85,000';
            hiddenInput.value = 85000;
        }
        document.querySelectorAll('label.active').forEach(label => {
            label.classList.remove('active');
        });
        this.selectChildCount(1);
        this.switchTimeframe('weekly');
        this.showStep(1);
        this.updateNavigation();
    }
}

var calculator;

function nextStep() { calculator.nextStep(); }

function prevStep() { calculator.prevStep(); }

function resetCalculator() { calculator.reset(); }

function toggleChildForm(childNumber) {
    const form = document.getElementById(`child-form-${childNumber}`);
    const content = form.querySelector('.child-form-content');
    const button = form.querySelector('.collapse-btn');
    if (content.style.display === 'none') {
        content.style.display = 'block';
        button.textContent = '▲';
    } else {
        content.style.display = 'none';
        button.textContent = '▼';
    }
}
document.addEventListener('DOMContentLoaded', function() {
    calculator = new SubsidyCalculator();
    var style = document.createElement('style');
    style.textContent = '.c-sc-btn.active { background: #8B5E3C !important; color: white !important; } .child-form-content { display: block; }';
    document.head.appendChild(style);
});