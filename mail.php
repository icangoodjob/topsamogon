@charset "UTF-8";
/* remove default css  */
*,
*::before,
*::after {
  box-sizing: border-box;
}

* {
  margin: 0;
  padding: 0;
}

/* COLORS */
/* убирает стрелки браузера в инпуте с type = number */
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

input[type=number],
input[type=number]:hover,
input[type=number]:focus {
  -webkit-appearance: none;
          appearance: none;
  -moz-appearance: textfield;
}

.form-check-input:focus {
  box-shadow: 0 0 0 0.25rem rgba(230, 228, 60, 0.1);
}

.form-check-input:checked {
  background-color: #E6E43C;
  border-color: #E6E43C;
}

html, body {
  height: auto;
  width: 100%;
  overflow-x: hidden;
  font-family: "Roboto", sans-serif;
  margin: 0;
  font-size: 16px;
  font-weight: 400;
  position: relative;
}

div, nav {
  display: block;
}

ul {
  margin-left: 0;
  margin-right: 0;
}

li {
  list-style-type: none;
}

a {
  text-decoration: none;
  color: #000000;
}

a:hover, a:active, a:focus {
  color: #E6E43C !important;
}

h1 {
  font-weight: bold;
  font-size: 3.3rem;
  line-height: 1.1875;
  padding: 0px 6px;
}

h2 {
  font-size: 2.6rem;
  font-weight: bold;
  padding: 0px 6px 20px 6px;
}

section {
  padding: 30px 0px;
}

footer {
  padding: 40px 0px;
}

/* CUSTOM BUTTON */
.btn-custom:focus, .btn-custom:active {
  box-shadow: 0 0 0 0.2rem #E6E43C;
  background-color: #E6E43C;
  border-color: #E6E43C;
}

.btn-custom:active:focus {
  box-shadow: 0 0 0 0.25rem #E6E43C;
}

/* HEADER  */
.header {
  height: 80px;
  width: 100%;
}

.navbar-nav {
  align-items: center;
}

.nav {
  max-height: 80px;
}

.fixed-top {
  left: auto;
  right: auto;
}

.nav_item {
  margin: 0 6px;
}

.nav_item button {
  margin-right: 50px;
}

.nav-link {
  padding: 4px 6px;
}

a.nav-link button {
  width: 165px;
}

.btn-custom {
  width: 197px;
  height: 53px;
  background-color: #E6E43C;
  border-style: none;
}
.btn-custom:hover {
  background-color: #ecea5d;
}

/*  MODAL */
.modal-content {
  background-color: #262626;
  width: 65%;
  margin: 0 auto;
}

/*   MAIN SECTION  */
.main {
  width: 100%;
  background-image: url(../img/content/Mo5.gif);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  overflow-x: hidden;
  padding-top: 100px;
  color: #ffffff;
}

.gifts {
  display: flex;
  flex-direction: column;
  padding-top: 90px;
  padding-bottom: 40px;
}
.gifts_title {
  padding-bottom: 20px;
}
.gifts_list {
  padding-bottom: 20px;
}
.gifts_list li {
  padding-bottom: 8px;
  position: relative;
}
.gifts_item i {
  display: block;
  position: absolute;
  margin-top: 6px;
  margin-left: -30px;
}

/*   ADVANTAGES SECTION    */
.advantages {
  background-color: #f5f5f5;
  font-size: inherit;
}
.advantages img {
  display: block;
  margin-right: 25px;
  margin-bottom: 30px;
}
.advantages .row {
  padding-top: 15px;
}

.list-group-item {
  background-color: inherit;
  border-style: none;
}

/*  CARDS SECTION   */
.card {
  margin: 15px 35px;
}
.card_price {
  padding: 15px 0px;
  font-size: 1.2rem;
  font-weight: bold;
}
.card span {
  color: #FF0000;
  font-weight: normal;
  text-decoration: line-through;
}

/*  PACKAGE SECTION  */
.package {
  background-color: #8C9DA6;
}
.package_info {
  padding-top: 50px;
}
.package_text {
  font-size: 1.5rem;
}
.package_item {
  text-align: center;
  margin: 15px 20px;
}
.package_list {
  justify-content: center;
  padding-top: 40px;
}

/*  ABOUT SECTION */
.about .row {
  padding-bottom: 40px;
}
.about_title {
  font-weight: bold;
  font-size: 1.2rem;
  padding-bottom: 15px;
}

/* PARAMETERS SECTION */
.parameters {
  font-size: 1.2rem;
}
.parameters .row {
  padding-bottom: 40px;
}
.parameters li {
  list-style-type: decimal;
  padding-bottom: 8px;
}
.parameters ul li {
  list-style-type: none;
}

/*  GARANTEE SECTION  */
.guarantee {
  background-color: #F5F5F5;
}
.guarantee_title {
  font-weight: bold;
  font-size: 1.3rem;
}
.guarantee_title span {
  text-transform: uppercase;
}
.guarantee_item {
  padding-top: 20px;
}

/* FEEDBACK SECTION */
.feedback_card {
  margin-bottom: 14px;
  line-height: 1.6;
  padding: 30px;
  background-color: #e9e3dc;
  position: relative;
  flex: 1;
  max-width: 100%;
}
.feedback_card_userpic {
  width: 110px;
  height: 110px;
  background-position: 50% 50%;
  border-radius: 50%;
  border-width: 0;
  object-fit: cover;
  display: block;
  background-size: cover;
  background-repeat: no-repeat;
}
.feedback h6 {
  margin-left: 0;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 1.25rem;
  margin-bottom: 0;
  margin-top: 20px;
  font-weight: 400;
}

/*  DELIVERY SECTION  */
.delivery h4 {
  font-weight: bold;
  padding-top: 14px;
}

/*   FOOTER   */
.footer {
  color: #ffffff;
  background-image: url(../img/content/b62.gif);
  object-fit: cover;
  display: block;
  background-size: cover;
  background-repeat: no-repeat;
}
.footer h2 {
  padding-top: 20px;
}
.footer h3 {
  font-weight: bold;
  padding-top: 20px;
  padding-bottom: 12px;
}
.footer_worktime {
  margin-top: 30px;
}
.footer_privacy {
  color: #ffffff;
  text-decoration: underline;
}

a.footer_privacy:hover {
  color: #E6E43C;
}

.pick-up p {
  margin-bottom: 0.2rem;
}

.number {
  color: #ffffff;
  text-decoration: underline;
  padding-left: 40px;
}

.form-group input {
  width: 219px;
  height: 49px;
  border-radius: 10px;
  margin-bottom: 10px;
}
.form-group a {
  padding-right: 0px;
}

.form-btn {
  width: 219px;
  height: 49px;
  border-radius: 10px;
}

.form-check {
  margin: 0 auto;
}

.form-row {
  margin-top: -60px;
}

/* POLICY PAGE  */
.policy {
  background-color: #796F55;
  color: #ffffff;
}
.policy-close {
  text-align: right;
}
.policy-close i {
  color: #FFFFFF;
  display: inline-block;
  font-size: 40px;
  line-height: 40px;
  vertical-align: middle;
  width: 30px;
  cursor: pointer;
}
.policy-close i:hover {
  color: #E6E43C;
}
.policy_title {
  text-align: center;
  font-weight: bold;
  font-size: 1.1rem;
  padding: 8px 0px 30px 0px;
}
.policy_content {
  width: 75%;
  margin: 0 auto;
}
.policy_text {
  padding-left: 20%;
}

/* THANK YOU PAGE */
.thank-you {
  background-color: #796F55;
}

/*  MEADIA    */
@media (max-width: 1130px) {
  li.nav_item.callback,
li.nav_item.phone {
    display: none;
  }
}
@media (max-width: 992px) {
  .package_img {
    display: none;
    width: 0px;
  }

  a.nav-link button {
    display: none;
    width: 0px;
  }

  .about_text {
    order: 1;
  }

  .about_img {
    order: 2;
    margin-top: 15px;
  }

  .form-row {
    margin-top: 15px;
  }
}
@media (max-width: 768px) {
  h1 {
    font-size: 3rem;
  }

  h2 {
    font-size: 2rem;
  }

  .package_list {
    flex-wrap: wrap;
  }

  .package_btn {
    text-align: center;
  }

  .nav {
    width: 85%;
  }

  .main {
    height: auto;
  }

  .header.menu-show {
    height: 250px;
  }
  .header.menu-show .collapse:not(.show) {
    display: block;
  }
  .header.menu-show li {
    padding: 6px 0px 2px 0px;
    width: 80%;
    text-align: center;
    margin: 0 auto;
  }
  .header.menu-show li:active {
    border-bottom: 1px #262626 solid;
  }

  .gifts_title, .gifts_list, .gifts_btn {
    margin: 0 auto;
  }

  .feedback_card {
    flex-direction: column;
  }
  .feedback_card_userpic {
    margin: 0 auto;
    margin-bottom: 10px;
  }

  .details_list {
    margin: 0px 12px 0px 12px;
  }

  .policy_text {
    padding-left: 0;
  }
}
@media (max-width: 400px) {
  .nav {
    width: 85%;
  }

  .navbar-brand {
    display: none;
  }

  .modal-content {
    width: 100%;
  }

  .header {
    height: 60px;
  }
}