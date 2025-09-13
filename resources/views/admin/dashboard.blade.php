@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

<div class="wrapper">
    <main class="page">
        <div class="admin-page">
            <div class="container">
                <div class="admin-panel">
                    <div class="admin-panel__block">
                        <div class="admin-panel__title">Account selection:</div>
                        <div class="admin-panel__line">
                            <select name="account" data-class-modif="form">
                                <option value="" selected>Account</option>
                                <option value="client1">I.V. Client</option>
                                <option value="client2">J.D. Client</option>
                                <option value="client3">M.S. Client</option>
                            </select>
                            <div class="admin-panel__item">
                                Withdrawal to cryptocash
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_57_420)">
                                        <path d="M31.2499 6.25H27.8616C27.3423 6.25036 26.8393 6.4314 26.4389 6.76205C26.0385 7.09271 25.7656 7.55238 25.6671 8.06223C25.5686 8.57208 25.6505 9.10032 25.8988 9.55637C26.1472 10.0124 26.5465 10.3678 27.0282 10.5617L30.4682 11.9383C30.95 12.1322 31.3493 12.4876 31.5976 12.9436C31.846 13.3997 31.9279 13.9279 31.8294 14.4378C31.7308 14.9476 31.458 15.4073 31.0576 15.7379C30.6572 16.0686 30.1542 16.2496 29.6349 16.25H28.7499M28.7499 6.25V5" stroke="#63616C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M30.0501 21.1667C31.9005 20.9237 33.6459 20.1677 35.0891 18.9844C36.5323 17.8011 37.6156 16.2376 38.2165 14.4708C38.8175 12.7039 38.9121 10.8041 38.4896 8.9863C38.0672 7.16847 37.1446 5.50509 35.8261 4.18426C34.5076 2.86343 32.8459 1.93785 31.0288 1.51217C29.2117 1.0865 27.3118 1.17772 25.5439 1.77552C23.7759 2.37331 22.2105 3.45384 21.0246 4.8949C19.8388 6.33597 19.0798 8.08009 18.8334 9.93003M26.2501 26.25C26.2501 22.9348 24.9331 19.7554 22.5889 17.4112C20.2447 15.067 17.0653 13.75 13.7501 13.75M3.75008 18.75C2.73682 20.1147 2.01252 21.6717 1.62147 23.3258C1.23041 24.9799 1.1808 26.6964 1.47569 28.3703C1.77057 30.0443 2.40375 31.6405 3.33651 33.0614C4.26926 34.4823 5.48201 35.6981 6.90061 36.6343C8.3192 37.5706 9.91384 38.2077 11.587 38.5068C13.2602 38.8058 14.9769 38.7604 16.6319 38.3735C18.287 37.9865 19.8458 37.2661 21.213 36.2562C22.5801 35.2463 23.727 33.9682 24.5834 32.5" stroke="#63616C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 26.25C15.663 26.25 16.2989 25.9866 16.7678 25.5178C17.2366 25.0489 17.5 24.413 17.5 23.75C17.5 23.087 17.2366 22.4511 16.7678 21.9822C16.2989 21.5134 15.663 21.25 15 21.25H11.25V31.25H15C15.663 31.25 16.2989 30.9866 16.7678 30.5178C17.2366 30.0489 17.5 29.413 17.5 28.75C17.5 28.087 17.2366 27.4511 16.7678 26.9822C16.2989 26.5134 15.663 26.25 15 26.25ZM15 26.25H11.25M13.75 21.25V18.75M13.75 31.25V33.75M1.25 7.5L5 13.75L11.25 10" stroke="#63616C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.6483 1.5C11.334 2.3433 9.86066 3.92279 8.03068 5.99601C6.70082 8.06923 6.08811 10.5216 6.2866 12.9767M38.7499 32.5L34.9999 26.25L28.7499 30" stroke="#63616C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M26.3516 38.5001C28.6652 37.6569 30.6383 36.0779 31.9681 34.0054C33.2979 31.9329 33.911 29.4813 33.7132 27.0267" stroke="#63616C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_57_420">
                                            <rect width="40" height="40" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <label class="switch">
                                <input class="switch__input" type="checkbox" aria-label="Enable crypto withdrawal">
                                <span class="switch__track">
                                    <span class="switch__thumb"></span>
                                </span>
                            </label>
                            <button type="button" class="admin-panel__save">
                                Сохранить
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 10L12.258 12.444C12.4598 12.5954 12.7114 12.6649 12.9624 12.6385C13.2133 12.6122 13.445 12.492 13.611 12.302L20 5" stroke="white" stroke-width="2" stroke-linecap="round" />
                                    <path d="M21 12C21 13.8805 20.411 15.7138 19.3157 17.2424C18.2203 18.771 16.6736 19.918 14.8929 20.5225C13.1122 21.127 11.1868 21.1585 9.3873 20.6125C7.58776 20.0666 6.00442 18.9707 4.85967 17.4788C3.71492 15.9868 3.06627 14.1738 3.00481 12.2943C2.94335 10.4147 3.47218 8.56317 4.51702 6.99962C5.56187 5.43607 7.07023 4.23908 8.83027 3.57678C10.5903 2.91447 12.5136 2.82011 14.33 3.30696" stroke="white" stroke-width="2" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <div class="admin-panel__block">
                        <div class="admin-panel__title">Account info</div>
                        <div class="admin-panel__grid">
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">FullName</div>
                                <input class="admin-panel__field-input" type="text" value="I. V. Client" />
                            </div>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Date of Birth</div>
                                <input class="admin-panel__field-info" type="text" value="04.21.1997" />
                            </div>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Country</div>
                                <input class="admin-panel__field-info" type="text" value="Spain" />
                            </div>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Status</div>
                                <input class="admin-panel__field-info" type="text" value="Verificated" />
                            </div>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Balance</div>
                                <input class="admin-panel__field-info" type="text" value="50 000 €" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="admin-panel__block">
                        <div class="admin-panel__title">Bank accounts</div>
                        <div class="admin-panel__grid">
                            <select>
                                <option value="" selected>Select an account</option>
                                <option value="account1">EzInvest - Alfa bank</option>
                                <option value="account2">TradePro - Sber bank</option>
                                <option value="account3">InvestMax - VTB bank</option>
                            </select>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Balance</div>
                                <input class="admin-panel__field-input" type="text" value="17 000 €" />
                            </div>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Bank</div>
                                <input class="admin-panel__field-info" type="text" value="Alfa bank" />
                            </div>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Account No.</div>
                                <input class="admin-panel__field-info" type="text" value="4123 ... 3423" />
                            </div>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Owner</div>
                                <input class="admin-panel__field-info" type="text" value="I.V. Client" />
                            </div>
                            <div class="admin-panel__field">
                                <div class="admin-panel__field-label">Expiry date</div>
                                <input class="admin-panel__field-info" type="text" value="03/11/26" />
                            </div>
                            <button type="button" class="btn btn--sm" data-popup="#create-modal">
                                <span>Add new account</span>
                            </button>
                            <div class="admin-panel__switch-line">
                                <div class="checkbox">
                                    <input id="c_1" class="checkbox__input" type="checkbox">
                                    <label for="c_1" class="checkbox__label">
                                        <span class="checkbox__text">Change currency for all</span>
                                    </label>
                                </div>
                            </div>
                            <select>
                                <option value="" selected>Change type of account</option>
                                <option value="classic">Classic</option>
                                <option value="ecn">ECN</option>
                                <option value="pamm">PAMM</option>
                                <option value="gold">Gold</option>
                                <option value="silver">Silver</option>
                                <option value="platinum">Platinum</option>
                                <option value="transit">Transit</option>
                                <option value="crypto">Crypto</option>
                                <option value="vip">VIP</option>
                                <option value="credit">Credit</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Create Account Modal -->
<div id="create-modal" aria-hidden="true" class="popup popup--sm">
    <div class="popup__wrapper">
        <div class="popup__content">
            <div class="create-account">
                <div class="create-account__title">Создание нового счёта</div>
                <form action="#" class="create-account__form" method="POST">
                    @csrf
                    <div class="field">
                        <input type="text" name="account_name" placeholder="Название счёта (Account name)">
                    </div>
                    <div class="field">
                        <input type="text" name="account_number" placeholder="Номер счёта (Account number)">
                    </div>
                    <div class="field">
                        <input type="text" name="account_type" placeholder="Тип счёта (Account type)">
                    </div>
                    <div class="field">
                        <input type="text" name="bank" placeholder="Банк (Bank)">
                    </div>
                    <div class="field">
                        <input type="text" name="client_name" placeholder="Инициалы клиента (Client's fullname)">
                    </div>
                    <div class="field">
                        <input type="text" name="expiration_date" placeholder="Срок действия (Expiration date)">
                    </div>
                    <select name="status">
                        <option value="" selected disabled>Статус</option>
                        <option value="active">Active</option>
                        <option value="hold">Hold</option>
                        <option value="blocked">Blocked</option>
                    </select>
                    <button type="submit" class="btn btn--md">Добавить новый счёт</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Violation Modal -->
<div id="violation" aria-hidden="true" class="popup popup--md">
    <div class="popup__wrapper">
        <div class="popup__content">
            <button data-close type="button" class="popup__close">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L19 19M19 1L1 19" stroke="black" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
            <div class="modal-content">
                <div class="modal-content__top">
                    <div class="logo"><img src="{{ asset('personal-acc/img/logo.svg') }}" alt="logo"></div>
                    <div class="modal-content__text">
                        <p>Describe your complaint</p>
                    </div>
                </div>
                <div class="modal-content__body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="field">
                            <textarea name="complaint" placeholder="Write here..."></textarea>
                        </div>
                        <button type="submit" class="btn">Send</button>
                        <label class="modal-content__file">
                            <input type="file" name="attachment" hidden>
                            <span>Attach the file</span>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection