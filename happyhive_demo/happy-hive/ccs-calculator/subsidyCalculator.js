// Enhanced Child Care Subsidy Calculator with Multiple Children Support
class SubsidyCalculator {
    constructor() {
        this.currentStep = 1;
        this.totalSteps = 4;
        this.formData = {};
        this.childrenData = [];
        this.currentTimeframe = 'weekly';
        this.subsidyRates = {
            // Income brackets and corresponding subsidy rates (as of 2024)
            brackets: [
                { min: 0, max: 80000, rate: 0.90 }, // 90% subsidy
                { min: 80001, max: 530000, rate: 0.85 }, // 85% subsidy
                { min: 530001, max: 535279, rate: 0.80 } // 80% subsidy
            ]
        };
        this.careRates = {
            'long-day-care': 120, // Daily rate for long day care
            'family-day-care': 100, // Daily rate for family day care
            'occasional-care': 80, // Daily rate for occasional care
            'outside-school-hours': 60 // Daily rate for OSHC
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
        // Navigation button events
        document.querySelectorAll('.c-numeric-nav-button').forEach(button => {
            button.addEventListener('click', (e) => {
                const step = parseInt(e.currentTarget.dataset.step);
                if (step <= this.currentStep) {
                    this.goToStep(step);
                }
            });
        });

        // Radio button events
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                this.updateRadioLabels(e.target);
                this.saveFormData();
            });
        });

        // Input events - use event delegation for dynamically added elements
        document.addEventListener('change', (e) => {
            if (e.target.matches('input, select')) {
                console.log('Input changed:', e.target.id, e.target.value);
                this.saveFormData();
            }
        });

        document.addEventListener('input', (e) => {
            if (e.target.matches('input, select')) {
                console.log('Input typing:', e.target.id, e.target.value);
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
        // Use event delegation for dynamically added elements
        document.addEventListener('click', (e) => {
            if (e.target.closest('.session-option')) {
                const option = e.target.closest('.session-option');
                const sessionLength = option.dataset.session;
                const childForm = option.closest('.child-form');
                const childId = childForm.id.split('-')[2]; // Extract child number

                // Remove active from all session options in this form
                childForm.querySelectorAll('.session-option').forEach(function(opt) {
                    opt.classList.remove('active');
                });

                // Add active to clicked option
                option.classList.add('active');

                // Update hidden input
                const hiddenInput = document.getElementById('child' + childId + '-session');
                if (hiddenInput) {
                    hiddenInput.value = sessionLength;
                }

                this.saveFormData();
            }
        });
    }

    setupDaysSelection() {
        // Use event delegation for dynamically added elements
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
        console.log('Selecting child count:', count);

        // Update button states
        document.querySelectorAll('.child-count-btn').forEach(function(btn) {
            btn.classList.remove('active');
            if (parseInt(btn.dataset.count) === count) {
                btn.classList.add('active');
            }
        });

        // Update hidden input
        const childCountInput = document.getElementById('child-count');
        if (childCountInput) {
            childCountInput.value = count;
            console.log('Child count input updated to:', count);
        }

        // Show/hide multi-child info
        const multiChildInfo = document.getElementById('multi-child-info');
        if (multiChildInfo) {
            multiChildInfo.style.display = count > 1 ? 'block' : 'none';
        }

        // Generate child forms
        this.generateChildForms(count);
        this.saveFormData();
    }

    generateChildForms(count) {
        const container = document.querySelector('.l-application-wrapper_inner');
        const existingForms = document.querySelectorAll('.child-form');

        // Remove existing forms except the first one
        existingForms.forEach((form, index) => {
            if (index > 0) {
                form.remove();
            }
        });

        // Create additional forms if needed
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
            '<a href="#" style="color: #8B5E3C; text-decoration: none; font-size: 14px;">' +
            '<span style="color: #8B5E3C; cursor: help;">ⓘ</span> Don\'t know your daily rate for child care?' +
            '</a>' +
            '</div>' +
            '</div>' +
            '</div>';

        // Events are handled via delegation, no need to re-setup

        return form;
    }

    switchTimeframe(period) {
        this.currentTimeframe = period;

        // Update tab states
        document.querySelectorAll('.timeframe-tab').forEach(tab => {
            tab.classList.remove('active');
            if (tab.dataset.period === period) {
                tab.classList.add('active');
            }
        });

        // Recalculate and display results
        if (this.currentStep === 4) {
            this.calculateSubsidy();
        }
    }

    updateRadioLabels(selectedRadio) {
        // Remove active state from all radio labels in the same group
        const name = selectedRadio.name;
        document.querySelectorAll(`input[name="${name}"]`).forEach(radio => {
            const label = document.querySelector(`label[for="${radio.id}"]`);
            if (label) {
                label.classList.remove('active');
            }
        });

        // Add active state to selected radio label
        const selectedLabel = document.querySelector(`label[for="${selectedRadio.id}"]`);
        if (selectedLabel) {
            selectedLabel.classList.add('active');
        }
    }

    saveFormData() {
        // Save form data to this.formData object
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

        // Save children data
        this.saveChildrenData();

        // Debug: log form data to console
        console.log('Form data saved:', this.formData);
        console.log('Children data:', this.childrenData);
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
        // Hide all steps
        document.querySelectorAll('.step').forEach(stepEl => {
            stepEl.classList.remove('active');
        });

        // Show current step
        const currentStepEl = document.getElementById(`step-${step}`);
        if (currentStepEl) {
            currentStepEl.classList.add('active');
        }

        // If this is the summary step, calculate and display results
        if (step === 4) {
            this.calculateSubsidy();
        }
    }

    updateNavigation() {
        // Update navigation button states
        document.querySelectorAll('.c-numeric-nav-button').forEach((button, index) => {
            const stepNumber = index + 1;

            button.classList.remove('c-numeric-nav-button--current');

            if (stepNumber === this.currentStep) {
                button.classList.add('c-numeric-nav-button--current');
            }

            // Enable/disable buttons based on progress
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

            // Determine subsidy rate based on income
            let subsidyRate = 0;
            for (const bracket of this.subsidyRates.brackets) {
                if (income >= bracket.min && income <= bracket.max) {
                    subsidyRate = bracket.rate;
                    break;
                }
            }

            // Calculate for each child
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

            // Display results
            this.displayResults({
                totalWeeklyFees: Math.round(totalWeeklyFees),
                totalWeeklySubsidy: Math.round(totalWeeklySubsidy),
                totalOutOfPocket: Math.round(totalOutOfPocket),
                baseRate: Math.round(subsidyRate * 100),
                hasMultipleChildren: hasMultipleChildren
            });

        } catch (error) {
            console.error('Calculation error:', error);
            this.displayError();
        }
    }

    getChildSubsidyRate(baseRate, childIndex, hasMultipleChildren) {
        // Apply multi-child discount for second and subsequent children
        if (hasMultipleChildren && childIndex > 0) {
            // Increase subsidy rate by 10% for additional children (up to 95% max)
            return Math.min(baseRate + 0.10, 0.95);
        }
        return baseRate;
    }

    calculateWeeklyHours(child, activityHours) {
        const selectedDays = child.selectedDays;
        const sessionLength = parseInt(child.sessionLength);

        // Calculate hours per day based on session length and selected days
        const daysPerWeek = selectedDays.length / 2; // Assuming fortnightly selection
        const weeklyHours = daysPerWeek * sessionLength;

        // Apply activity test limits
        if (activityHours >= 100) {
            return Math.min(weeklyHours, 100); // Up to 100 hours
        } else if (activityHours >= 24) {
            return Math.min(weeklyHours, 72); // Up to 72 hours
        } else {
            return Math.min(weeklyHours, 24); // Up to 24 hours
        }
    }

    calculateWeeklyCost(child, dailyRate) {
        const selectedDays = child.selectedDays;
        const daysPerWeek = selectedDays.length / 2; // Assuming fortnightly selection
        return daysPerWeek * dailyRate;
    }

    displayResults(results) {
        const timeframe = this.currentTimeframe;
        const multiplier = this.getTimeframeMultiplier(timeframe);

        // Update main results
        document.getElementById('total-fees').innerHTML = this.formatCurrency(results.totalWeeklyFees * multiplier) + '<span class="cost-period">' + timeframe + '</span>';
        document.getElementById('estimated-subsidy').innerHTML = this.formatCurrency(results.totalWeeklySubsidy * multiplier) + '<span class="cost-period">' + timeframe + '</span>';
        document.getElementById('out-of-pocket').innerHTML = this.formatCurrency(results.totalOutOfPocket * multiplier) + '<span class="cost-period">' + timeframe + '</span>';

        // Update weekly breakdown
        document.getElementById('week1-subsidy').textContent = this.formatCurrency(Math.round(results.totalWeeklySubsidy * 0.5));
        document.getElementById('week1-out-of-pocket').textContent = this.formatCurrency(Math.round(results.totalOutOfPocket * 0.5));
        document.getElementById('week2-subsidy').textContent = this.formatCurrency(Math.round(results.totalWeeklySubsidy * 0.5));
        document.getElementById('week2-out-of-pocket').textContent = this.formatCurrency(Math.round(results.totalOutOfPocket * 0.5));

        // Show/hide multi-child discount info
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
                return 4.33; // Approximate weeks per month
            case 'yearly':
                return 52; // Weeks per year
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

        // Clear all form inputs
        document.querySelectorAll('input, select').forEach(input => {
            if (input.type === 'radio') {
                input.checked = false;
            } else {
                input.value = '';
            }
        });

        // Reset slider
        const slider = document.getElementById('income-slider');
        const display = document.getElementById('income-display');
        const hiddenInput = document.getElementById('family-income');

        if (slider && display && hiddenInput) {
            slider.value = 85000;
            display.textContent = '$ 85,000';
            hiddenInput.value = 85000;
        }

        // Remove active states from radio labels
        document.querySelectorAll('label.active').forEach(label => {
            label.classList.remove('active');
        });

        // Reset child selection
        this.selectChildCount(1);

        // Reset timeframe tabs
        this.switchTimeframe('weekly');

        // Reset to first step
        this.showStep(1);
        this.updateNavigation();
    }
}

// Global functions for button onclick handlers
var calculator;

function nextStep() {
    calculator.nextStep();
}

function prevStep() {
    calculator.prevStep();
}

function resetCalculator() {
    calculator.reset();
}

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

// Initialize calculator when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    calculator = new SubsidyCalculator();

    // Add some styling for active radio labels
    var style = document.createElement('style');
    style.textContent =
        '.c-sc-btn.active {' +
        'background: #8B5E3C !important;' +
        'color: white !important;' +
        '}' +
        '.child-form-content {' +
        'display: block;' +
        '}';
    document.head.appendChild(style);
});

// Export for potential module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = SubsidyCalculator;
}