<?php
if (!defined('ABSPATH')) { exit; }
$options = happyhive_get_calculator_options();
$default_income = isset($options['default_income']) ? intval($options['default_income']) : 85000;
?>
<div class="happyhive-calculator-wrapper" id="subsidy-calculator">
    <div class="l-application-wrapper l-application-wrapper--orange l-application-wrapper--small">
        <div class="l-application-wrapper_inner">
            <div class="c-alert-banner">
                <svg class="c-alert-banner__icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3M19 19H5V5H19V19M11 7H13V9H11V7M11 11H13V17H11V11Z"/>
                </svg>
                <h2 class="c-alert-banner__heading"><?php echo esc_html($atts['title']); ?></h2>
            </div>
        </div>
    </div>

    <div class="l-application-wrapper l-application-wrapper--grey">
        <div class="l-application-wrapper_inner">
            <nav class="o-numeric-nav">
                <button type="button" class="c-numeric-nav-button c-numeric-nav-button--current" data-step="1">
                    <span class="c-numeric-nav-button__number">1</span> <?php esc_html_e('You', 'happyhive-subsidy-calculator'); ?>
                </button>
                <button type="button" class="c-numeric-nav-button" data-step="2">
                    <span class="c-numeric-nav-button__number">2</span> <?php esc_html_e('Subsidy', 'happyhive-subsidy-calculator'); ?>
                </button>
                <button type="button" class="c-numeric-nav-button" data-step="3">
                    <span class="c-numeric-nav-button__number">3</span> <?php esc_html_e('Children', 'happyhive-subsidy-calculator'); ?>
                </button>
                <button type="button" class="c-numeric-nav-button" data-step="4">
                    <span class="c-numeric-nav-button__number">4</span> <?php esc_html_e('Summary', 'happyhive-subsidy-calculator'); ?>
                </button>
            </nav>
        </div>
    </div>

    <div class="step active" id="step-1">
        <div class="l-application-wrapper">
            <div class="l-application-wrapper_inner">
                <h2 class="c-application-header"><?php esc_html_e('You', 'happyhive-subsidy-calculator'); ?></h2>
                <hr class="c-application-hr">

                <div class="c-input-group c-input-group--sm">
                    <label class="c-sc-label" for="user-location"><?php esc_html_e('Where are you located?', 'happyhive-subsidy-calculator'); ?></label>
                    <input placeholder="<?php esc_attr_e('Enter suburb', 'happyhive-subsidy-calculator'); ?>" type="search" autocomplete="off" class="c-sc-field" id="user-location">
                </div>

                <hr class="c-application-hr">

                <fieldset class="c-sc-radio-group">
                    <legend class="c-sc-label c-sc-radio-group__legend"><?php esc_html_e('Is your child Aboriginal or Torres Strait Islander?', 'happyhive-subsidy-calculator'); ?></legend>
                    <div class="c-input-group c-input-group--no-margin c-input-group--mobile-stretch">
                        <input type="radio" class="c-sc-radio visually-hidden" id="indigenous-yes" name="indigenous" value="true">
                        <label class="c-sc-label c-sc-btn c-sc-btn--small c-sc-btn--pill c-sc-btn--pill-stretch" for="indigenous-yes"><?php esc_html_e('Yes', 'happyhive-subsidy-calculator'); ?></label>
                    </div>
                    <div class="c-input-group c-input-group--no-margin c-input-group--mobile-stretch">
                        <input type="radio" class="c-sc-radio visually-hidden" id="indigenous-no" name="indigenous" value="false">
                        <label class="c-sc-label c-sc-btn c-sc-btn--small c-sc-btn--pill c-sc-btn--pill-stretch" for="indigenous-no"><?php esc_html_e('No', 'happyhive-subsidy-calculator'); ?></label>
                    </div>
                </fieldset>

                <div class="c-sc-btn-group">
                    <button class="c-sc-btn c-sc-btn--primary c-sc-btn--align-right" type="button" onclick="nextStep()"><?php esc_html_e('Continue', 'happyhive-subsidy-calculator'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="step" id="step-2">
        <div class="l-application-wrapper">
            <div class="l-application-wrapper_inner">
                <h2 class="c-application-header"><?php esc_html_e('Subsidy', 'happyhive-subsidy-calculator'); ?></h2>
                <hr class="c-application-hr">

                <div class="income-slider-container">
                    <div class="c-input-group">
                        <label class="c-sc-label" for="family-income"><?php esc_html_e('What is your combined family income that you report to Centrelink?', 'happyhive-subsidy-calculator'); ?> <span style="color:#8B5E3C;cursor:help;" aria-hidden="true">ⓘ</span></label>
                        <div class="slider-input-group">
                            <div class="slider-wrapper">
                                <input type="range" class="slider" id="income-slider" min="40000" max="535279" value="<?php echo esc_attr($default_income); ?>" step="1000">
                                <div class="slider-labels">
                                    <span>$40,000</span>
                                    <span>$535,279+</span>
                                </div>
                            </div>
                            <div class="slider-value" id="income-display"><?php echo '$ ' . number_format($default_income); ?></div>
                        </div>
                        <input type="hidden" id="family-income" value="<?php echo esc_attr($default_income); ?>">
                    </div>
                </div>

                <hr class="c-application-hr">

                <fieldset class="c-sc-radio-group">
                    <legend class="c-sc-label c-sc-radio-group__legend"><?php esc_html_e('What is the level of fortnightly activity for the parent working the least? (In hours)', 'happyhive-subsidy-calculator'); ?> <span style="color:#8B5E3C;cursor:help;" aria-hidden="true">ⓘ</span></legend>
                    <div class="c-input-group c-input-group--no-margin c-input-group--mobile-stretch">
                        <input type="radio" class="c-sc-radio visually-hidden" id="hours-low" name="activity-hours" value="24">
                        <label class="c-sc-label c-sc-btn c-sc-btn--small c-sc-btn--pill c-sc-btn--pill-stretch" for="hours-low">0-48 hrs</label>
                    </div>
                    <div class="c-input-group c-input-group--no-margin c-input-group--mobile-stretch">
                        <input type="radio" class="c-sc-radio visually-hidden" id="hours-high" name="activity-hours" value="100">
                        <label class="c-sc-label c-sc-btn c-sc-btn--small c-sc-btn--pill c-sc-btn--pill-stretch" for="hours-high">49+ hrs</label>
                    </div>
                </fieldset>

                <div class="c-sc-btn-group">
                    <button class="c-sc-btn" type="button" onclick="prevStep()"><?php esc_html_e('Back', 'happyhive-subsidy-calculator'); ?></button>
                    <button class="c-sc-btn c-sc-btn--primary c-sc-btn--align-right" type="button" onclick="nextStep()"><?php esc_html_e('Continue', 'happyhive-subsidy-calculator'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="step" id="step-3">
        <div class="l-application-wrapper">
            <div class="l-application-wrapper_inner">
                <h2 class="c-application-header"><?php esc_html_e('Children', 'happyhive-subsidy-calculator'); ?></h2>

                <div class="c-input-group">
                    <label class="c-sc-label"><?php esc_html_e('How many children will you have in long day care?', 'happyhive-subsidy-calculator'); ?></label>
                    <div class="child-selection">
                        <button class="child-count-btn active" data-count="1">1</button>
                        <button class="child-count-btn" data-count="2">2</button>
                        <button class="child-count-btn" data-count="3">3</button>
                        <button class="child-count-btn" data-count="4">4</button>
                        <button class="child-count-btn" data-count="5">5</button>
                    </div>
                    <input type="hidden" id="child-count" value="1">
                </div>

                <div class="multi-child-section" id="multi-child-info" style="display:none;">
                    <div class="multi-child-header">
                        <div class="multi-child-icon">2+</div>
                        <div>
                            <div class="multi-child-title"><?php esc_html_e('Multi-child discount', 'happyhive-subsidy-calculator'); ?></div>
                            <div class="multi-child-subtitle"><?php esc_html_e('Higher subsidy for siblings!', 'happyhive-subsidy-calculator'); ?></div>
                        </div>
                    </div>
                    <div class="multi-child-text"><?php esc_html_e('Families with more than one child 5 or under in care can get a higher subsidy for their second child. This will be estimated in your final calculations.', 'happyhive-subsidy-calculator'); ?></div>
                </div>

                <hr class="c-application-hr">

                <div class="child-form" id="child-form-1">
                    <div class="child-form-header">
                        <span class="child-form-title"><?php esc_html_e('Child 1', 'happyhive-subsidy-calculator'); ?></span>
                        <button class="collapse-btn" onclick="toggleChildForm(1)">▲</button>
                    </div>

                    <div class="child-form-content">
                        <div class="c-input-group">
                            <label class="c-sc-label" for="child1-dob"><?php esc_html_e('Date of birth', 'happyhive-subsidy-calculator'); ?></label>
                            <input type="date" class="c-sc-field" id="child1-dob">
                        </div>

                        <div class="days-selection">
                            <div class="week-label"><?php esc_html_e('Fortnightly days in long day care', 'happyhive-subsidy-calculator'); ?></div>
                            <div class="week-label"><?php esc_html_e('Week 1', 'happyhive-subsidy-calculator'); ?></div>
                            <div class="days-row">
                                <button class="day-btn" data-day="mon">Mon</button>
                                <button class="day-btn" data-day="tue">Tue</button>
                                <button class="day-btn" data-day="wed">Wed</button>
                                <button class="day-btn" data-day="thu">Thu</button>
                                <button class="day-btn" data-day="fri">Fri</button>
                            </div>
                            <div class="week-label"><?php esc_html_e('Week 2', 'happyhive-subsidy-calculator'); ?></div>
                            <div class="days-row">
                                <button class="day-btn" data-day="mon">Mon</button>
                                <button class="day-btn" data-day="tue">Tue</button>
                                <button class="day-btn" data-day="wed">Wed</button>
                                <button class="day-btn" data-day="thu">Thu</button>
                                <button class="day-btn" data-day="fri">Fri</button>
                            </div>
                        </div>

                        <div class="c-input-group">
                            <label class="c-sc-label"><?php esc_html_e('Hours per day', 'happyhive-subsidy-calculator'); ?></label>
                            <div class="session-options">
                                <div class="session-option active" data-session="10">
                                    <div style="font-weight: 600;">10 hour session</div>
                                    <div style="font-size: 14px; color: #6c757d;">7:00 AM - 5:00 PM</div>
                                </div>
                                <div class="session-option" data-session="12">
                                    <div style="font-weight: 600;">All day session</div>
                                    <div style="font-size: 14px; color: #6c757d;">7:00 AM - 7:00 PM</div>
                                </div>
                            </div>
                            <input type="hidden" id="child1-session" value="10">
                        </div>

                        <div class="c-input-group">
                            <label class="c-sc-label" for="child1-fees"><?php esc_html_e('Fees per day', 'happyhive-subsidy-calculator'); ?></label>
                            <div style="position: relative;">
                                <!--<span style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: #6c757d;">$</span>-->
                                <span class="dollar-sign">$</span>
                                <input type="number" class="c-sc-field" id="child1-fees" placeholder="<?php esc_attr_e('Enter the daily fee', 'happyhive-subsidy-calculator'); ?>" style="padding-left: 30px;">
                            </div>
                            <div style="margin-top: 10px;">
                                <a href="#" style="color:#8B5E3C;text-decoration:none;font-size:14px;">
                                    <span style="color:#8B5E3C;cursor:help;">ⓘ</span> <?php esc_html_e("Don't know your daily rate for child care?", 'happyhive-subsidy-calculator'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="c-sc-btn-group">
                    <button class="c-sc-btn" type="button" onclick="prevStep()"><?php esc_html_e('Back', 'happyhive-subsidy-calculator'); ?></button>
                    <button class="c-sc-btn c-sc-btn--primary c-sc-btn--align-right" type="button" onclick="nextStep()"><?php esc_html_e('Calculate', 'happyhive-subsidy-calculator'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="step" id="step-4">
        <div class="l-application-wrapper">
            <div class="l-application-wrapper_inner">
                <div class="results-section">
                    <div class="results-header">
                        <h2><?php esc_html_e('Summary', 'happyhive-subsidy-calculator'); ?></h2>
                    </div>

                    <div class="timeframe-tabs">
                        <button class="timeframe-tab active" data-period="weekly"><?php esc_html_e('Weekly', 'happyhive-subsidy-calculator'); ?></button>
                        <button class="timeframe-tab" data-period="fortnightly"><?php esc_html_e('Fortnightly', 'happyhive-subsidy-calculator'); ?></button>
                        <button class="timeframe-tab" data-period="monthly"><?php esc_html_e('Monthly', 'happyhive-subsidy-calculator'); ?></button>
                        <button class="timeframe-tab" data-period="yearly"><?php esc_html_e('Yearly', 'happyhive-subsidy-calculator'); ?></button>
                    </div>

                    <div class="main-results">
                        <div class="child-summary">
                            <h3><?php esc_html_e('My child', 'happyhive-subsidy-calculator'); ?></h3>
                            <div class="cost-item">
                                <span class="cost-label"><?php esc_html_e('Total fees', 'happyhive-subsidy-calculator'); ?></span>
                                <span class="cost-value total-fees" id="total-fees">$0<span class="cost-period">week</span></span>
                            </div>
                            <div class="cost-item">
                                <span class="cost-label"><?php esc_html_e('Estimated subsidy', 'happyhive-subsidy-calculator'); ?></span>
                                <span class="cost-value subsidy" id="estimated-subsidy">$0<span class="cost-period">week</span></span>
                            </div>
                            <div class="cost-item">
                                <span class="cost-label"><?php esc_html_e('Out of pocket costs', 'happyhive-subsidy-calculator'); ?></span>
                                <span class="cost-value out-of-pocket" id="out-of-pocket">$0<span class="cost-period">week</span></span>
                            </div>
                        </div>

                        <div class="weekly-breakdown">
                            <h3><?php esc_html_e('Weekly Breakdown', 'happyhive-subsidy-calculator'); ?></h3>
                            <div class="week-columns">
                                <div class="week-column">
                                    <div class="week-header"><?php esc_html_e('WEEK 1', 'happyhive-subsidy-calculator'); ?></div>
                                    <div class="week-fee"><?php esc_html_e('Total fee', 'happyhive-subsidy-calculator'); ?> $0</div>
                                    <div class="week-subsidy-box">
                                        <div class="week-box-label"><?php esc_html_e('Est. subsidy', 'happyhive-subsidy-calculator'); ?></div>
                                        <div class="week-box-value subsidy" id="week1-subsidy">$0</div>
                                    </div>
                                    <div class="week-out-of-pocket-box">
                                        <div class="week-box-label"><?php esc_html_e('Out of pocket', 'happyhive-subsidy-calculator'); ?></div>
                                        <div class="week-box-value out-of-pocket" id="week1-out-of-pocket">$0</div>
                                    </div>
                                </div>
                                <div class="week-column">
                                    <div class="week-header"><?php esc_html_e('WEEK 2', 'happyhive-subsidy-calculator'); ?></div>
                                    <div class="week-fee"><?php esc_html_e('Total fee', 'happyhive-subsidy-calculator'); ?> $0</div>
                                    <div class="week-subsidy-box">
                                        <div class="week-box-label"><?php esc_html_e('Est. subsidy', 'happyhive-subsidy-calculator'); ?></div>
                                        <div class="week-box-value subsidy" id="week2-subsidy">$0</div>
                                    </div>
                                    <div class="week-out-of-pocket-box">
                                        <div class="week-box-label"><?php esc_html_e('Out of pocket', 'happyhive-subsidy-calculator'); ?></div>
                                        <div class="week-box-value out-of-pocket" id="week2-out-of-pocket">$0</div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 15px; text-align: center;">
                                <span style="color:#6c757d;cursor:help;">ⓘ</span>
                                <span style="color:#6c757d;font-size:14px;">Why week 1 and 2 may differ</span>
                            </div>
                        </div>
                    </div>

                    <div class="multi-child-section" id="results-multi-child" style="display:none;">
                        <div class="multi-child-header">
                            <div class="multi-child-icon">2+</div>
                            <div>
                                <div class="multi-child-title"><?php esc_html_e('Multi-child discount applied', 'happyhive-subsidy-calculator'); ?></div>
                                <div class="multi-child-subtitle"><?php esc_html_e('Higher subsidy for your second child!', 'happyhive-subsidy-calculator'); ?></div>
                            </div>
                        </div>
                        <div class="multi-child-text"><?php esc_html_e('Your family qualifies for the multi-child discount. This means your second and subsequent children receive a higher subsidy rate, reducing your out-of-pocket costs.', 'happyhive-subsidy-calculator'); ?></div>
                    </div>

                    <?php if (!empty($options['show_disclaimer'])): ?>
                        <div class="info-note">
                            <div class="info-icon">$</div>
                            <div class="info-text">
                                <strong><?php echo esc_html(isset($options['disclaimer_text']) ? $options['disclaimer_text'] : __('This is an estimate only. Actual subsidies may vary based on individual circumstances.', 'happyhive-subsidy-calculator')); ?></strong>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="c-sc-btn-group">
                    <button class="c-sc-btn" type="button" onclick="prevStep()"><?php esc_html_e('Back', 'happyhive-subsidy-calculator'); ?></button>
                    <button class="c-sc-btn c-sc-btn--primary" type="button" onclick="resetCalculator()"><?php esc_html_e('Start Over', 'happyhive-subsidy-calculator'); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>


