<div id="file-product" class="modal h-modal is-big">
    <div class="modal-background h-modal-close"></div>
    <div class="modal-content">
        <div class="form-layout is-split">
            <div class="form-outer">
                <div class="form-header stuck-header">
                    <div class="form-header-inner">
                        <div class="left">
                            <h3>Request Payout</h3>
                        </div>
                        <div class="right">
                            <div class="buttons">
                                <a href="#" class="button h-button is-light is-dark-outlined">
                                    <span class="icon">
                                        <i class="lnir lnir-arrow-left rem-100"></i>
                                    </span>
                                    <span>Cancel</span>
                                </a>
                                <button id="save-button" class="button h-button is-primary is-raised">
                                    Request Payout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-body">
                    <div class="form-section">
                        <div class="left">
                            <h3 class="has-text-centered">Choose an amount</h3>
                            <div class="operator">
                                <span>Or</span>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <div class="radio-pills">
                                        <div class="radio-pill">
                                            <input type="radio" name="amount_selection" checked="">
                                            <div class="radio-pill-inner">
                                                <span>$20</span>
                                            </div>
                                        </div>
                                        <div class="radio-pill">
                                            <input type="radio" name="amount_selection">
                                            <div class="radio-pill-inner">
                                                <span>$40</span>
                                            </div>
                                        </div>
                                        <div class="radio-pill">
                                            <input type="radio" name="amount_selection">
                                            <div class="radio-pill-inner">
                                                <span>$60</span>
                                            </div>
                                        </div>
                                        <div class="radio-pill">
                                            <input type="radio" name="amount_selection">
                                            <div class="radio-pill-inner">
                                                <span>$100</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <h3 class="has-text-centered">Enter your own</h3>
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" placeholder="Amount...">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-section is-grey">
                        <div class="left">
                            <h3>Personal Info</h3>

                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" placeholder="First Name *">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" placeholder="Last Name *">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" placeholder="Email Address *">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control has-icon">
                                    <input class="input" placeholder="Phone Number *">
                                    <div class="form-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <h3>Payout Details</h3>

                            <div class="field">
                                <div class="control">
                                    <div class="h-select">
                                        <div class="select-box">
                                            <span>Bank Account</span>
                                        </div>
                                        <div class="select-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                        <div class="select-drop has-slimscroll-sm">
                                            <div class="drop-inner">
                                                <div class="option-row">
                                                    <input type="radio" name="account_select">
                                                    <div class="option-meta">
                                                        <span>AMEX **** 42</span>
                                                    </div>
                                                </div>
                                                <div class="option-row">
                                                    <input type="radio" name="account_select">
                                                    <div class="option-meta">
                                                        <span>HSBC **** 29</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <div class="h-select">
                                        <div class="select-box">
                                            <span>Transfer Fees</span>
                                        </div>
                                        <div class="select-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                        <div class="select-drop has-slimscroll-sm">
                                            <div class="drop-inner">
                                                <div class="option-row">
                                                    <input type="radio" name="fees_selection">
                                                    <div class="option-meta">
                                                        <span>Super Fast - $3.00</span>
                                                    </div>
                                                </div>
                                                <div class="option-row">
                                                    <input type="radio" name="fees_selection">
                                                    <div class="option-meta">
                                                        <span>Regular - $0.50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label>Notify me when funds are ready?</label>
                                <div class="control">
                                    <label class="radio">
                                        <input type="radio" name="notification_selection" checked="">
                                        <span></span>
                                        Yes
                                    </label>

                                    <label class="radio is-outlined is-primary">
                                        <input type="radio" name="notification_selection">
                                        <span></span>
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="uniq-product" class="modal h-modal is-big">
    <div class="modal-background h-modal-close"></div>
    <div class="modal-content">
        <form action="" method="post" id="enregistrer-produit">
            <div class="form-layout is-split">
                <div class="form-outer">
                    <div class="form-header stuck-header">
                        <div class="form-header-inner">
                            <div class="left">
                                <h3>Ajouter un nouveau Produit</h3>
                            </div>
                            <div class="right">
                                <div class="buttons">
                                    <button type="reset" id="reset-button" class="button h-button is-danger is-outlined is-raised">
                                        Effacer
                                    </button>
                                    <button type="submit" id="save-produit" name="save-produit" class="button h-button is-success is-outlined is-raised">
                                        Enregistrer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-section">
                            <div class="left">
                                <h3 class="has-text-centered">Prix standard</h3>
                                <div class="operator">
                                    <span>And</span>
                                </div>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="number" name="prix_standard" required value="0" min="0" placeholder="Amount...">
                                        <div class="form-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <h3 class="has-text-centered">Prix minimum</h3>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" name="prix_minimum" min="0" value="0" placeholder="Amount...">
                                        <div class="form-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-section is-grey">
                            <div class="left">
                                <h3>Plus d'infos</h3>

                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="text" name="nom" required placeholder="Nom. Ex: Fomat A4, 1l Huile, Plat de koki  *">
                                        <div class="form-icon">
                                            <i class="lnir lnir-shopping-basket"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control has-icon">
                                        <input class="input" type="number" name="quantite" placeholder="Quantité disponible">
                                        <div class="form-icon">
                                            <i class="lnir lnir-dropbox"></i>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="right">
                                <h3>Bon à savoir</h3>

                                <div class="field">
                                    <div class="control">
                                        <div class="h-select">
                                            <div class="select-box">
                                                <span>Type</span>
                                            </div>
                                            <div class="select-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </div>
                                            <div class="select-drop has-slimscroll-sm">
                                                <div class="drop-inner">
                                                    <div class="option-row">
                                                        <input type="radio" value="service" name="nature">
                                                        <div class="option-meta">
                                                            <span>Service</span>
                                                        </div>
                                                    </div>
                                                    <div class="option-row">
                                                        <input type="radio" value="produit" checked name="nature">
                                                        <div class="option-meta">
                                                            <span>Produit</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <div class="h-select">
                                            <div class="select-box">
                                                <span>Unité</span>
                                            </div>
                                            <div class="select-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </div>
                                            <div class="select-drop has-slimscroll-sm">
                                                <div class="drop-inner">
                                                    <div class="option-row">
                                                        <input type="radio" value="piece" checked name="fees_selection">
                                                        <div class="option-meta">
                                                            <span>Piece</span>
                                                        </div>
                                                    </div>
                                                    <div class="option-row">
                                                        <input type="radio" value="packet" name="fees_selection">
                                                        <div class="option-meta">
                                                            <span>Packet</span>
                                                        </div>
                                                    </div>
                                                    <div class="option-row">
                                                        <input type="radio" value="carton" name="fees_selection">
                                                        <div class="option-meta">
                                                            <span>Carton</span>
                                                        </div>
                                                    </div>
                                                    <div class="option-row">
                                                        <input type="radio" value="sac" name="fees_selection">
                                                        <div class="option-meta">
                                                            <span>Sac</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Stock Illimité?</label>
                                    <div class="control">
                                        <label class="radio is-info">
                                            <input type="radio" value="-1" name="notification_selection" >
                                            <span></span>
                                            Oui
                                        </label>

                                        <label class="radio is-outlined is-primary">
                                            <input type="radio" value="0" name="notification_selection" checked="">
                                            <span></span>
                                            Non
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>