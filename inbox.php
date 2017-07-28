
<!DOCTYPE html>
<!-- saved from url=(0048)https://s.codepen.io/sathishlxg/fullpage/qEyMxj? -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
  <title>CodePen - Inbox (work in progress)</title>
  <link href="./font-awesome.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="./Inbox_files/css" rel="stylesheet">

    <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@CodePen">
  <meta name="twitter:title" content="Inbox (work in progress)">
  <meta name="twitter:description" content="...">
  <meta name="twitter:image" content="https://s3-us-west-2.amazonaws.com/i.cdpn.io/241761.qEyMxj.75aa63b8-d2ff-442e-9c3b-2ae108c4e9e1.png">

  <meta property="og:image" content="https://codepen.io/sathishlxg/pen/qEyMxj/image/large.png" itemprop="thumbnailUrl">
  <meta property="og:title" content="Inbox (work in progress)">
  <meta property="og:url" content="https://codepen.io/sathishlxg/details/qEyMxj">
  <meta property="og:site_name" content="CodePen">
  <meta property="og:description" content="...">
<link rel="alternate" type="application/json+oembed" href="https://codepen.io/api/oembed?url=https://codepen.io/sathishlxg/pen/qEyMxj&amp;format=json" title="Inbox (work in progress)">
   <script async="" src="./Inbox_files/analytics.js"></script>
  <script src="./Inbox_files/full_page_renderer-6b4553ed098c775ece80e98aa80a6177b2d9f609f5fde92e7f0a23a8e6aa0f0c.js"></script>


      <style>
      * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 82.5%;
  background: #fff;
  height: 100%;
  min-width: 300px;
  -webkit-font-smoothing: antialiased !important;
  background: #ececec;
  overflow-Y: scroll;
}

.menu-wrapper {
  position: fixed;
  z-index: 1000;
  top: 0;
  left: 0;
  height: 65px;
  background: #4285f4;
  width: 100%;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
  transition: all .2s ease-in;
}
.menu-wrapper a {
  text-decoration: none;
  color: #fff;
}

.menu-wrapper.spam .chk-pin,
.menu-wrapper.reminder .chk-pin,
.menu-wrapper.other .chk-pin,
.menu-wrapper.done .chk-pin,
.menu-wrapper.snooz .chk-pin {
  display: none;
}
.menu-wrapper.spam .search-box,
.menu-wrapper.reminder .search-box,
.menu-wrapper.other .search-box,
.menu-wrapper.done .search-box,
.menu-wrapper.snooz .search-box {
  width: 100%;
  padding: 0;
}

.menu-wrapper.done {
  background: #0f9d58;
}
.menu-wrapper.done .menu-toggle-icon:active {
  background: #13cc72;
}

.menu-wrapper.snooz {
  background: #eca403;
}
.menu-wrapper.snooz .menu-toggle-icon:active {
  background: #fcba26;
}

.menu-wrapper.reminder {
  background: #7f3296;
}
.menu-wrapper.reminder .menu-toggle-icon:active {
  background: #9f3fbc;
}

.menu-wrapper.spam {
  background: #db4437;
}
.menu-wrapper.spam .menu-toggle-icon:active {
  background: #e36c62;
}

.menu-wrapper.other {
  background: #898984;
}
.menu-wrapper.other .menu-toggle-icon:active {
  background: #a2a29e;
}

.menu-wrapper.search {
  background: #f6f6f6;
}
.menu-wrapper.search .back {
  display: inline-block;
  font-size: 16px;
  line-height: 65px;
  padding-left: 15px;
  margin-left: 5px;
  font-weight: normal;
  color: #666666;
}
.menu-wrapper.search .search-box {
  width: 98%;
}
.menu-wrapper.search .search-box > input {
  background: white;
  color: #212121;
}
.menu-wrapper.search .logo {
  color: #666666;
  font-weight: normal;
}
.menu-wrapper.search .menu-toggle-icon {
  display: none;
}
.menu-wrapper.search ::-webkit-input-placeholder {
  color: #c0c0c0;
}
.menu-wrapper.search .chk-pin {
  display: none;
}
.menu-wrapper.search a {
  color: black;
}
.menu-wrapper.search .icon-bar {
  border-top: 2px solid black;
}
.menu-wrapper.search .search-box:after {
  color: black;
}

.left-container,
.right-container {
  min-width: 50px;
  max-width: 250px;
  width: 18%;
  height: 100%;
  line-height: 65px;
  overflow: hidden;
}

.left-container {
  float: left;
}
.left-container .back {
  display: none;
}
.left-container .menu-toggle-icon {
  position: relative;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  cursor: pointer;
  padding: 8px;
  top: 20%;
  margin-left: 5px;
  line-height: 65px;
  display: inline-block;
  float: left;
}
.left-container .menu-toggle-icon input[type=checkbox] {
  display: none;
}
.left-container .menu-toggle-icon:active {
  background: #72a4f7;
}
.left-container .menu-toggle-icon .icon-bar {
  display: block;
  margin: 4px;
  border-top: 2px solid white;
}
.left-container a {
  text-decoration: none;
  color: #fff;
}
.left-container .logo {
  position: relative;
  display: inline-block;
  line-height: 65px;
  padding: 0 10px;
  font-size: 20px;
  font-weight: 600;
  width: 80px;
}

.center-container {
  position: relative;
  width: 64%;
  height: 65px;
  overflow: hidden;
  margin: 0 auto;
  text-align: center;
}
.center-container .search-box {
  display: table-cell;
  padding-right: 24px;
  line-height: 65px;
  white-space: nowrap;
  transition: .2s;
  width: 90%;
}
.center-container .search-box > input {
  height: 40px;
  width: 100%;
  display: inline-block;
  right: 0;
  left: 0;
  background: rgba(255, 255, 255, 0.15);
  position: relative;
  border: none;
  outline: none;
  color: white;
  padding: 0 0 0 50px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  letter-spacing: .8px;
}
.center-container .search-box:after {
  content: "\f002";
  font-family: FontAwesome;
  position: absolute;
  color: white;
  font-size: 16px;
  left: 20px;
  cursor: pointer;
}
.center-container .chk-pin {
  display: table-cell;
  line-height: 65px;
  width: 60px;
  margin-right: 10px;
}
.center-container .chk-pin span {
  display: inline-block;
  top: 2px;
  position: relative;
  height: 17px;
  width: 44px;
  border-radius: 20px;
  background: #1266f1;
}
.center-container .chk-pin span:after {
  content: "\f08d";
  font-family: FontAwesome;
  font-size: 14px;
  transform: rotate(45deg);
  text-align: center;
  color: white;
  position: absolute;
  background: inherit;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  top: -28%;
  left: -1px;
  line-height: 30px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.24);
  transition: all .2s ease;
}
.center-container .chk-pin input {
  display: none;
}
.center-container .chk-pin input:checked + span {
  background: white;
}
.center-container .chk-pin input:checked + span:after {
  left: 22px;
  background: white;
  color: #4285f4;
  transform: rotate(0deg);
}
.center-container ::-webkit-input-placeholder {
  color: white;
}
.center-container .search-wrapper {
  display: table;
  width: 100%;
}

.right-container {
  float: right;
  text-align: right;
}
.right-container nav.menus li {
  display: inline-block;
  margin-right: 15px;
  padding: 2px 5px;
}
.right-container nav.menus li a:hover {
  color: black;
  opacity: 0.5;
}
.right-container nav.menus li .link-image {
  position: relative;
  top: 7px;
}
.right-container nav.menus li .link-image img {
  width: 24px;
  height: 24px;
  border-radius: 100%;
}

.search-hide {
  transform: translateY(-350%);
  opacity: 0;
}

.search-result {
  transition: transform .4s ease-in-out, opacity .05s ease-out;
  z-index: 1;
  width: 61%;
  left: 18%;
  position: absolute;
  min-height: 200px;
  height: auto;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 -1px 0 #e5e5e5, 0 0 2px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.24);
}

.dropdown {
  z-index: 10000;
  display: none;
  position: absolute;
  top: 110%;
  width: 280px;
  line-height: 20px;
  right: 16px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.16), 0 4px 12px rgba(0, 0, 0, 0.3);
  transition: all 0.3s ease-out;
}
.dropdown:after {
  content: "";
  position: absolute;
  top: 0;
  margin-top: -6px;
  right: 12px;
  border-width: 0 6px 6px 6px;
  border-style: solid;
  border-color: #fff transparent;
}
.dropdown:before {
  content: "";
  width: 0;
  height: 0;
  position: absolute;
  top: 0;
  right: 12px;
  margin-top: -8px;
  border-width: 0 8px 8px 8px;
  border-style: solid;
  border-color: #fff transparent;
}
.dropdown .dropdown-item {
  position: relative;
  padding: 10px;
}
.dropdown .dropdown-item img {
  width: 96px;
  height: 96px;
  border-radius: 2px;
  float: left;
  cursor: pointer;
}
.dropdown .dropdown-item:not(.default) {
  background: #f5f5f5;
  border-top: 1px solid #ccc;
  border-color: rgba(0, 0, 0, 0.2);
}
.dropdown .dropdown-item:not(.default) img {
  width: 48px;
  height: 48px;
}
.dropdown .dropdown-item:not(.default):hover {
  background: #eee;
}
.dropdown .dropdown-item.default:before {
  content: "Change image";
  color: white;
  height: 20px;
  width: 96px;
  font-size: 10px;
  display: inline-block;
  text-align: center;
  background: #4285f4;
  opacity: .8;
  position: absolute;
  bottom: 12px;
  left: 10px;
  cursor: pointer;
}
.dropdown .dropdown-item:after {
  display: table;
  clear: both;
  content: "";
}
.dropdown .profile-content {
  color: #000;
  text-align: left;
  margin: 6px 10px;
  margin-left: 50px;
}
.dropdown .profile-content .email {
  font-size: 12px;
  line-height: 1em;
  color: #666;
}
.dropdown .profile-content a {
  color: #000;
}
.dropdown .profile-content ul li {
  display: block;
  list-style: none;
  color: black;
}
.dropdown .default .profile-content {
  margin-left: 120px;
  line-height: 1.4;
}
.dropdown .default .profile-content a {
  color: #4285f4;
}
.dropdown .default .profile-content .click {
  display: inline-block;
  margin-top: 5px;
  background: #4285f4;
  padding: 5px 10px;
  color: #fff;
  border-radius: 2px;
}

.default-btn {
  color: #000 !important;
  padding: 5px;
  border: 1px solid #c6c6c6;
  border-radius: 2px;
}

.pull-left {
  float: left;
}

pull-right {
  float: right;
}

.body-wrapper {
  position: relative;
  margin: 0 auto;
  top: 65px;
}
.body-wrapper .btn-wrapper {
  position: relative;
}
.body-wrapper .btn-wrapper span {
  display: none;
  position: absolute;
  padding: 6px;
  white-space: nowrap;
  color: #ececec;
  background: rgba(70, 70, 70, 0.9);
  right: 60px;
  top: -10px;
  border-radius: 3px;
}
.body-wrapper .action-btn {
  position: relative;
  cursor: pointer;
  position: fixed;
  right: 20px;
  bottom: 20px;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  border: none;
  outline: none;
  background: #ff4d4d;
  z-index: 3;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.16);
  transform: rotate(180deg);
  transition: all .3s ease;
}
.body-wrapper .action-btn:after {
  content: "\f067";
  color: white;
  font-size: 18px;
  font-family: FontAwesome;
}
.body-wrapper .action-btn:hover + span {
  display: block;
}

.wrapper {
  position: relative;
  margin: 50px auto;
  width: 80%;
  transition: .2s;
}
.wrapper .header {
  padding-bottom: 20px;
  margin: 0 10%;
  position: relative;
  padding-left: 22px;
  color: #757575;
  font-size: 14px;
}
.wrapper .header button {
  background-color: transparent;
  position: absolute;
  right: 20px;
  top: 0;
  opacity: .25;
  width: 24px;
  border: none;
  outline: none;
  height: 24px;
  cursor: pointer;
}
.wrapper .header button:hover {
  opacity: .75;
}
.wrapper .content-wrapper {
  transition: all .2s ease-in-out;
  margin: 0 10%;
  position: relative;
  overflow: hidden;
  background: #fff;
  cursor: pointer;
  box-shadow: 0 -1px 0 #e5e5e5, 0 0 2px rgba(0, 0, 0, 0.12), 0 2px 4px rgba(0, 0, 0, 0.24);
}
.wrapper .content-wrapper:hover > .subject > .actions ul {
  display: block;
}
.wrapper .content-wrapper:hover > .subject > .actions ul a {
  padding: 1px;
}
.wrapper .content-wrapper:focus {
  border-left: 2px solid #4285f4;
}
.wrapper .content-wrapper .name {
  float: left;
  width: 184px;
  overflow: hidden;
  text-overflow: elipsis;
  word-wrap: noword;
}
.wrapper .content-wrapper .name span {
  display: inline-block;
  padding-top: 16px;
}
.wrapper .content-wrapper .subject {
  position: relative;
  display: block;
  margin: 0 20px 0 8px;
  min-width: 150px;
  text-overflow: elipsis;
  overflow: hidden;
}
.wrapper .content-wrapper .subject .actions {
  float: right;
  width: 50px;
  font-size: 16px;
}
.wrapper .content-wrapper .subject .actions ul {
  overflow: hidden;
  list-style: none;
  position: absolute;
  top: 16px;
  right: 5px;
  display: none;
  background: white;
}
.wrapper .content-wrapper .subject .actions ul li {
  display: inline-block;
  margin: 0 5px;
}
.wrapper .content-wrapper .subject .actions ul li a {
  text-decoration: none;
  padding: 5px;
  color: black;
  opacity: .5;
}
.wrapper .content-wrapper .subject .actions ul li a:hover {
  opacity: .8;
}
.wrapper .content-wrapper .subject .actions ul li a.pinned {
  opacity: 1;
  color: #4285f4;
}
.wrapper .content-wrapper .subject .content {
  float: left;
  overflow: hidden;
}
.wrapper .content-wrapper .subject .content span {
  display: inline-block;
  padding-top: 16px;
}
.wrapper .content-wrapper .subject .content .fs {
  font-weight: bold;
  padding-right: 5px;
}
.wrapper .content-wrapper .subject .content .sn {
  display: inline-block;
  color: #757575;
  padding-right: 5px;
}
.wrapper .content-wrapper .pinned-msg {
  position: absolute;
  display: none;
  top: 16px;
  right: 5px;
  color: #4285f4;
}
.wrapper .mail-wrapper {
  margin: 2% 8%;
  transition: all .1s ease-in-out;
  background: white;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.16), 0 6px 12px rgba(0, 0, 0, 0.32);
}
.wrapper .mail-wrapper .mail-top {
  cursor: pointer;
  padding: 20px;
}
.wrapper .mail-wrapper .mail-body .someClass {
  margin: 0 20px 0 16px;
  width: auto;
  overflow: hidden;
  text-overflow: ellipsis;
  word-wrap: nowrap;
}
.wrapper .mail-wrapper .mail-body .someClass .sender {
  margin-top: 20px;
}
.wrapper .mail-wrapper .mail-body .someClass .sender > :first-child {
  font-weight: bold;
}
.wrapper .mail-wrapper .mail-body .someClass .message {
  padding: 30px 40px 20px 0;
}
.wrapper .mail-wrapper .mail-footer {
  background: rgba(117, 117, 117, 0.07);
}
.wrapper .mail-wrapper .mail-footer .replybox {
  margin: 0 20px;
  width: auto;
  overflow: hidden;
}
.wrapper .mail-wrapper .mail-footer .replybox:after {
  content: "";
  clear: both;
  left: 0;
}
.wrapper .mail-wrapper .mail-footer .replybox .draft {
  margin-top: 20px;
}
.wrapper .mail-wrapper .mail-footer .replybox .draft span {
  cursor: pointer;
}
.wrapper .mail-wrapper .mail-footer .replybox .draft span:nth-child(1) {
  color: #db4437;
  font-weight: bold;
}
.wrapper .mail-wrapper .mail-footer .replybox .draft i,
.wrapper .mail-wrapper .mail-footer .replybox .draft span:nth-child(2) {
  color: #999;
  font-weight: bold;
}
.wrapper .mail-wrapper .mail-footer .replybox .draft i:hover,
.wrapper .mail-wrapper .mail-footer .replybox .draft span:nth-child(2):hover {
  color: #333;
}
.wrapper .mail-wrapper .mail-footer .replybox textarea {
  font-family: inherit;
  background: rgba(117, 117, 117, 0.01);
  outline: none;
  border: none;
  width: 100%;
  resize: none;
  height: 60px;
}
.wrapper .mail-wrapper .mail-footer .replybox div {
  margin-bottom: 10px;
}
.wrapper .mail-wrapper .mail-footer .replybox a {
  text-decoration: none;
  color: #333;
  padding: 10px;
  display: inline-block;
  font-size: 20px;
}
.wrapper .mail-wrapper .mail-footer .replybox a:nth-child(2) {
  transform: rotate(-45deg);
}
.wrapper .mail-wrapper .mail-footer .replybox a.send-btn {
  cursor: pointer;
  background: #4285f4;
  text-decoration: none;
  position: relative;
  padding: 8px;
  font-size: 13px;
  border-radius: 2px;
  color: white;
  font-weight: normal;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.14), 0 4px 6px rgba(0, 0, 0, 0.24);
}
.wrapper .mail-wrapper .mail-footer .replybox a.send-btn:hover {
  background: #2a75f3;
  text-shadow: 2px 2px rgba(0, 0, 0, 0.15);
  box-shadow: 0 3px 4px rgba(0, 0, 0, 0.14), 0 6px 8px rgba(0, 0, 0, 0.24);
}
.wrapper .mail-wrapper img {
  width: 36px;
}
.wrapper .shadow {
  box-shadow: 0 -1px 1px #e5e5e5, 0 2px 1px rgba(0, 0, 0, 0.12);
}

.image {
  float: left;
  padding: 12px 24px;
}
.image > img {
  width: 24px;
  border-radius: 50%;
}

.show {
  transform: translateX(0px);
  opacity: 1;
}

.hide {
  opacity: 0;
  transform: translateX(-250px);
}

.sidebar {
  position: fixed;
  z-index: 1;
  background: white;
  top: 55px;
  bottom: 0;
  left: 0;
  width: 220px;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 2px 4px 8px rgba(0, 0, 0, 0.28);
  transition: all .2s ease;
}
.sidebar ul {
  position: relative;
  padding-top: 25px;
}
.sidebar ul li {
  list-style: none;
  position: relative;
}
.sidebar ul li input[type="checkbox"] {
  display: none;
}
.sidebar ul li label {
  position: relative;
}
.sidebar ul li label:after {
  content: "\f0d7 ";
  font-family: fontAwesome;
  position: absolute;
  right: 30px;
  top: 40%;
}
.sidebar ul li input[type="checkbox"]:checked ~ label {
  background: white;
}
.sidebar ul li input[type="checkbox"]:checked ~ label:hover {
  background: none;
}
.sidebar ul li input[type="checkbox"]:checked ~ label:after {
  content: "\f0d8";
}
.sidebar ul li input[type="checkbox"]:checked ~ ul {
  background: white;
  color: #9b9b9b;
  max-height: 200px;
  transition: all .6s ease;
}
.sidebar ul li:hover {
  background: #e8e8e8;
}
.sidebar ul li:hover > a, .sidebar ul li:hover label {
  color: #4285f4;
}
.sidebar ul li a,
.sidebar ul li label {
  display: block;
  cursor: pointer;
  padding: 20px;
  text-decoration: none;
  color: #9b9b9b;
  font-weight: 600;
}
.sidebar ul li a span,
.sidebar ul li label span {
  display: inline-block;
  padding-left: 20px;
}
.sidebar ul li a i,
.sidebar ul li label i {
  display: inline-block;
}
.sidebar ul li ul {
  position: relative;
  transition: all .3s ease;
  padding: 0;
  margin: 0;
  max-height: 0;
  overflow: hidden;
}
.sidebar ul li ul li {
  position: relative;
  list-style: none;
}
.sidebar ul li ul li:hover {
  color: #9b9b9b;
}

.color-green {
  color: green;
}

.color-amber {
  color: #e6e61a;
}

.color-cyan {
  color: #00b3b3;
}

.color-blue {
  color: #4285f4;
}

.color-red {
  color: #cc3333;
}

.left {
  float: left;
}

.right {
  float: right;
}

.font:after {
  content: "\f031";
  font-family: "fontAwesome";
}

.arrow:after {
  content: "\f107";
  font-family: "fontAwesome";
}

.floating-btn {
  position: fixed;
  z-index: 1000;
  right: 20px;
  bottom: 50px;
}
.floating-btn:hover .action-btn {
  transform: rotate(360deg);
}
.floating-btn:hover .action-btn:after {
  content: "\f040";
}
.floating-btn:hover > .floating-menus li button {
  opacity: 1;
  transform: scale(1);
}
.floating-btn:hover > .floating-menus li:nth-child(5) button {
  transition: all .2s ease;
}
.floating-btn:hover > .floating-menus li:nth-child(4) button {
  transition: all .2s ease .05s;
}
.floating-btn:hover > .floating-menus li:nth-child(3) button {
  transition: all .2s ease .10s;
}
.floating-btn:hover > .floating-menus li:nth-child(2) button {
  transition: all .2s ease .15s;
}
.floating-btn:hover > .floating-menus li:nth-child(1) button {
  transition: all .2s ease .20s;
}

.floating-menus {
  margin-bottom: 20px;
  position: fixed;
  bottom: 65px;
  right: 30px;
  z-index: 100;
  width: 40px;
  list-style: none;
  padding-bottom: 5px;
}
.floating-menus li button {
  position: relative;
  border: none;
  outline: none;
  margin: 5px 0px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  z-index: 3;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.28);
  opacity: 0;
  transform: scale(0);
}
.floating-menus li button img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}
.floating-menus li button span {
  display: none;
  position: absolute;
  padding: 6px;
  white-space: nowrap;
  color: #ececec;
  background: rgba(70, 70, 70, 0.9);
  right: 115%;
  top: 16%;
  border-radius: 3px;
}
.floating-menus li button:hover span {
  display: block;
}
.floating-menus li:nth-child(1) button {
  transition: all .2s ease;
}
.floating-menus li:nth-child(2) button {
  transition: all .2s ease .05s;
}
.floating-menus li:nth-child(3) button {
  transition: all .2s ease .10s;
}
.floating-menus li:nth-child(4) button {
  transition: all .2s ease .15s;
}
.floating-menus li:nth-child(5) button {
  transition: all .2s ease .20s;
}
.floating-menus li > button.invite-action {
  background: url(https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/ic_speeddialbg_clr_r1.png) center center no-repeat;
}
.floating-menus li > button.invite-action img {
  height: 24px;
  width: 24px;
  border-radius: 50%;
}

.msg-compose {
  position: absolute;
  height: 500px;
  width: 480px;
  bottom: 0;
  right: 0;
  background: white;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.18), 0 8px 16px rgba(0, 0, 0, 0.36);
}
.msg-compose input, .msg-compose textarea {
  border: none;
  outline: none;
  width: 100%;
  resize: none;
  padding: 10px;
}
.msg-compose .msg-compose-wrapper {
  height: 100%;
  width: 100%;
  position: relative;
}
.msg-compose .msg-compose-wrapper .msg-title-bar {
  height: 40px;
  background: #555;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  color: white;
}
.msg-compose .msg-compose-wrapper .msg-title-bar a {
  text-decoration: none;
  color: white;
}
.msg-compose .msg-compose-wrapper .msg-title-bar div {
  display: inline-block;
  line-height: 40px;
  margin: 0 10px;
}
.msg-compose .msg-compose-wrapper .msg-title-bar div i {
  margin: 0 5px;
}
.msg-compose .msg-compose-wrapper .msg-recipients {
  background: white;
  min-height: 50px;
  border-bottom: 1px solid #c6c6c6;
}
.msg-compose .msg-compose-wrapper .msg-recipients .cc-list, .msg-compose .msg-compose-wrapper .msg-recipients .bcc-list {
  display: none;
}
.msg-compose .msg-compose-wrapper .msg-recipients .to-list {
  padding-right: 30px;
  position: relative;
}
.msg-compose .msg-compose-wrapper .msg-recipients .to-list span.arrow {
  position: absolute;
  right: 5px;
  top: 5px;
  color: #999;
  font-weight: 600;
  letter-spacing: 2px;
  padding: 0 0 0 3px;
  display: inline-block;
  text-align: center;
  line-height: 20px;
  cursor: pointer;
  width: 20px;
  height: 20px;
}
.msg-compose .msg-compose-wrapper .msg-recipients .to-list span.arrow:hover {
  border-radius: 2px;
  border: 1px solid #ccc;
}
.msg-compose .msg-compose-wrapper .msg-subject {
  background: white;
  min-height: 30px;
}
.msg-compose .msg-compose-wrapper .msg-subject input {
  height: 30px;
  font-weight: 800;
}
.msg-compose .msg-compose-wrapper .msg-body textarea {
  font-family: inherit;
  display: block;
  height: 100%;
}
.msg-compose .msg-compose-wrapper .msg-footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 50px;
  line-height: 50px;
  border-top: 1px solid #c6c6c6;
  font-size: 16px;
}
.msg-compose .msg-compose-wrapper .msg-footer a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
  margin: 0 10px;
}
.msg-compose .msg-compose-wrapper .msg-footer a.send-btn {
  background: #4285f4;
  -webkit-transform: translate3d(0, 0, 0);
  position: relative;
  text-decoration: none;
  padding: 8px;
  text-align: center;
  width: 50px;
  font-size: 13px;
  border-radius: 2px;
  color: white;
  font-weight: normal;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.12), 0 4px 8px rgba(0, 0, 0, 0.24);
}
.msg-compose .msg-compose-wrapper .msg-footer a.send-btn:hover {
  background: #2a75f3;
  text-shadow: 2px 2px rgba(0, 0, 0, 0.15);
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.14), 0 6px 8px rgba(0, 0, 0, 0.24);
}
.msg-compose .msg-compose-wrapper .msg-footer div {
  margin: 0 15px;
}

.msg-wrapper {
  bottom: 0;
  left: 0;
  right: 0;
  padding-right: 87px;
  position: fixed;
  direction: rtl;
  z-index: 999;
  transform: translateZ(0);
}

.msg-compose-container {
  border-spacing: 15px 0;
  display: table;
  width: 100%;
}

.row {
  display: table-row;
}

.empty-cell {
  display: table-cell;
}
.empty-cell:after {
  content: "";
  font-size: 0;
}

.cell {
  width: 480px;
  display: table-cell;
  margin-right: 15px;
  direction: ltr;
}

.wrap {
  position: relative;
}

.template {
  display: none;
}

.ink {
  position: absolute;
  display: block;
  border-radius: 50%;
  background: #333;
  -webkit-transform: scale(0);
  transform: scale(0);
  opacity: 1;
}

.ink.animate {
  -webkit-animation: animate .3s linear;
  animation: animate .3s linear;
}

@keyframes animate {
  100% {
    opacity: 0;
    transform: scale(2);
  }
}
@-webkit-keyframes animate {
  100% {
    opacity: 0;
    -webkit-transform: scale(2.5);
    transform: scale(2.5);
  }
}
.dialog-overlay {
  position: fixed;
  background: rgba(10, 10, 10, 0.6);
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 99999;
}
.dialog-overlay .dialog {
  background: white;
  box-shadow: 0 0 14px rgba(0, 0, 0, 0.24), 0 14px 28px rgba(0, 0, 0, 0.48);
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 240px;
  max-width: 400px;
  margin-left: -200px;
  margin-top: -114px;
  min-height: 100px;
  padding: 10px;
  -webkit-animation: grow .2s ease forwards;
}
.dialog-overlay .dialog .dialog-content .dialog-header {
  padding: 20px 10px;
}
.dialog-overlay .dialog .dialog-content .dialog-header h3 {
  font-weight: normal !important;
}
.dialog-overlay .dialog .dialog-content .dialog-header i {
  color: #4285f4;
  margin: 0px 10px;
}
.dialog-overlay .dialog .dialog-content .dialog-body {
  margin: 14px 10px;
}
.dialog-overlay .dialog .dialog-content .dialog-body input {
  width: 100%;
  height: 30px;
  outline: none;
  border: none;
  margin: 10px 0px;
  position: relative;
}
.dialog-overlay .dialog .dialog-content .dialog-body input:focus + .border {
  border-bottom: 2px solid #4285f4;
}
.dialog-overlay .dialog .dialog-content .dialog-body .border {
  width: 100%;
  margin-top: -10px;
  margin-bottom: 30px;
  border-bottom: 2px solid transparent;
  height: 2px;
}
.dialog-overlay .dialog .dialog-content .dialog-footer a {
  float: right;
  padding: 8px;
  margin: 5px;
  background: transparent;
  cursor: pointer;
  border-radius: 2px;
  font-weight: bold;
  color: #757575;
}
.dialog-overlay .dialog .dialog-content .dialog-footer a:hover {
  background: rgba(198, 198, 198, 0.7);
}
.dialog-overlay .dialog .dialog-content .dialog-footer a.dialog-action {
  color: #4285f4;
}

@-webkit-keyframes grow {
  from {
    -webkit-transform: scale(0, 0);
  }
  to {
    -webkit-transform: scale(1, 1);
  }
}
@media screen and (max-width: 1000px) {
  .right-container nav.menus ul > li:not(:last-child) {
    display: none;
  }

  .left-container .logo {
    display: none;
  }

  article.wrapper {
    width: 100%;
    margin-left: 0;
    margin-right: 0;
    padding: 0;
  }

  .wrapper {
    margin: 0;
  }

  .header {
    margin: 0 !important;
    padding: 15px 5px !important;
  }
  .header button {
    top: 5px !important;
  }

  .content-wrapper {
    padding-bottom: 10px;
    margin: 0 !important;
    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.06), 0 0 1px rgba(0, 0, 0, 0.12);
  }
  .content-wrapper .name {
    float: none !important;
  }
  .content-wrapper .subject .actions ul {
    top: 7px !important;
  }
  .content-wrapper .subject .content .fn,
  .content-wrapper .subject .content .sn {
    display: block !important;
    margin-bottom: 5px;
  }
  .content-wrapper .subject .content span:nth-child(2) {
    display: none;
  }
  .content-wrapper .subject .content span {
    padding-top: 5px !important;
  }

  .wrapper .mail-wrapper {
    margin: 2% 0 !important;
    border: none;
  }

  .center-container .search-box {
    width: auto !important;
  }
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no">

  <div class="menu-wrapper">
  <div class="left-container">
    <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="back"><i class="fa fa-arrow-left"></i></a>
    <label class="menu-toggle-icon">
      <input type="checkbox">
      <span href="#" class="icon-bar"></span>
      <span href="#" class="icon-bar"></span>
      <span href="#" class="icon-bar"></span>

    </label>
    <a rel="nofollow" class="logo" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><span>Inbox</span></a>
  </div>
  <div class="right-container">
    <nav class="menus">
      <ul>
        <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-comment"></i></a></li>
        <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-th"></i></a></li>
        <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-bell"></i></a></li>
        <li>

          <div class="dropdown">
            <div class="dropdown-item default">
              <img src="./photo(1).jpg" alt="">
              <div class="profile-content">
                  <div><b>Sathish Kumar</b></div>
                  <div>sathislxg@gmail.com</div>
                  <div><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#">Account</a> - <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#">Privacy</a></div>
                  <div><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="click">View Profile</a></div>
              </div>
            </div>
            <div class="dropdown-item">
              <a rel="nofollow" class="profile-item" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?">
                  <img src="./photo(2).jpg">
                  <div class="profile-content">
                    <div>Sathish Kumar Thangaraj</div>
                    <div class="email">Sathishlxg@gmail.com (default)</div>
                  </div>
              </a>
            </div>
            <div class="dropdown-item">
              <a rel="nofollow" class="profile-item" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?">
                  <img src="./photo.jpg">
                  <div class="profile-content">
                  <div class="default-name">Sathish Kumar</div>
                  <div class="email">Sathislxg@gmail.com</div>
              </div>
              </a>
            </div>
            <div class="dropdown-item">
              <a rel="nofollow" class="default-btn pull-left" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#">Add account</a>
              <a rel="nofollow" class="default-btn pull-right" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#">Sign out</a>
            </div>
          </div>
        </li>
      </ul>
    </nav>
  </div>
  <div class="center-container">

  </div>
</div>
<div class="body-wrapper">
  <articel class="search-result search-hide"></articel>
  <nav class="sidebar hide">
    <ul>
      <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="inbox"><i class="fa fa-thumb-tack fa-lg color-blue"></i><span>Inbox</span></a></li>
      <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-send-o fa-lg color-cyan"></i><span>Sent</span></a></li>
      <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="snooz"><i class="fa fa-clock-o fa-lg color-amber"></i><span>Snoozed</span></a></li>
      <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="done"><i class="fa fa-check fa-lg color-green"></i><span>Done</span></a></li>
      <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-trash fa-lg"></i><span>Trash</span></a></li>
      <li>
        <input type="checkbox" id="drop-menu">
        <label for="drop-menu" class="sub-menu"><i class="fa fa-cog fa-lg"></i><span>Settings</span></label>
        <ul>
          <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="reminder"><i class="fa fa-hand-o-up fa-lg"></i><span>Reminders</span></a></li>
          <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="spam"><i class="fa fa-warning fa-lg color-red"></i><span>Spam</span></a></li>
        </ul>
      </li>
    </ul>
  </nav>

  <section>
    <article class="wrapper">
      <div class="header">

        <div class="action">
          <button><i class="fa fa-check fa-lg"></i></button>
        </div>
      </div>
      <div class="mail-wrapper" style="display: none;">
        <div class="mail-top shadow">
          <div class="mail-subject">FW:Jobs to Apply for</div>
          <div class="mail-action"></div>
        </div>
        <div class="mail-body ">
          <div class="image">
            <img src="./avatar_tile_k_56.png">
          </div>
          <div class="someClass">
            <div class="sender">
              <sapn>Kennedy</sapn>
              <span> to me </span>
            </div>
            <div class="message">
              The only thing I can think to do is trigger an event when the window resizes and dynamically set a new fixed width on text-div, but this just feels inelegant, especially considering padding and other neighboring artifacts I'd have to subtract out to get
              a proper width.
            </div>
          </div>
        </div>
        <div class="mail-footer shadow">
          <div class="image">
            <img src="./avatar_tile_s_56.png">
          </div>
          <div class="replybox">
            <div class="draft"><span>Draft </span><span>to, Kennedy <i class="fa fa-angle-down"></i></span></div>
            <textarea></textarea>
            <div class="left">
              <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="send-btn">SEND</a>
              <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-paperclip"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="content-wrapper" style="display: block;">
        <div class="image">
          <img src="./avatar_tile_k_56.png">
        </div>
        <div class="name"><span>Kennedy</span></div>
        <div class="subject">
          <div class="actions">
            <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="pinned-msg"><i class="fa fa-thumb-tack"></i></a>
            <ul>
              <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-thumb-tack"></i></a></li>
              <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-clock-o"></i></a></li>
              <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-check"></i></a></li>
              <li><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
          </div>
          <div class="content">
            <span class="fs">FW: Jobs to Apply for</span>
          </div>
        </div>
      </div>
    </article>

  </section>
</div>
<div class="msg-wrapper">
  <div class="msg-compose-container">
    <div id="msg-box" class="row">
      <div class="empty-cell"></div>
    </div>
  </div>
</div>
<div class="template">
  <div class="cell">
    <div class="wrap">
      <div class="msg-compose">
        <div class="msg-compose-wrapper">
          <div class="msg-title-bar">
            <div class="icon left"><i class="fa fa-envelope"></i></div>
            <div class="compose-actions right">
              <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="minimize"><i class="fa fa-minus"></i></a><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="close"><i class="fa fa-times"></i></a>
            </div>
          </div>
          <div class="msg-recipients">
            <div class="to-list">
              <input type="text" placeholder="To"><span class="arrow"></span></div>
            <div class="cc-list collapse">
              <input type="text" placeholder="cc">
            </div>
            <div class="bcc-list collapse">
              <input type="text" placeholder="Bcc">
            </div>
          </div>
          <div class="msg-subject">
            <input type="text" placeholder="Subject">
          </div>
          <div class="msg-body">
            <textarea placeholder="Say something"></textarea>
          </div>
          <div class="msg-footer">
            <div class="left">
              <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="send-btn">SEND</a>
              <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-paperclip"></i></a>
              <a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#" class="font"></a>
            </div>
            <div class="right"><a rel="nofollow" href="https://s.codepen.io/sathishlxg/fullpage/qEyMxj?#"><i class="fa fa-trash"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="dialog-overlay" style="display:none">
  <div class="dialog">
    <div class="dialog-content">
        <div class="dialog-header">
          <div class="title"><h3>Share Inbox by Gmail</h3></div>
        </div>
        <div class="dialog-body">
          <div>Invite a friend who wants to try Inbox. You have 10 invitations left.</div>
          <input type="text" placeholder="Email address"><div class="border"></div>
        </div>
        <div class="dialog-footer">
          <a rel="nofollow" class="dialog-action">SEND AN INVITATION</a>
          <a>CANCEL</a>
        </div>
    </div>
  </div>
</div>
    <script src="./stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src="./jquery.min.js"></script>

    <script>
    /**

////////////	BELOW IS THE BAD WAY OF WRITING JQuery CODE  ////////////////////////////

/////////// THIS PEN HAS BEEN CREATED TO LEARN HTML AND CSS ONLY NOT JS ////////////

**/

$(function() {
  $(".actions a").click(function(e) {
    e.stopPropagation();
  });

   $("a.dialog-action").click(function() {
      $(".dialog-overlay").hide();
  });

  $("button.invite-action").click(function(e) {
      $(".dialog-overlay").show();
  });

  $(".actions>ul>li:first-child>a").click(function(e) {
    e.stopPropagation();
    var $this = $(this);
    $this.toggleClass('pinned');
    var pin = $this.parents('.actions');
     $('.pinned-msg',$(pin)).toggle();
  });

  $(".content-wrapper").click(function() {
    var $ele = $(this);
    $ele.hide();
    $ele.prev().show();
  });

  $(".sidebar a").click(function() {
    var className = $(this).attr('class') || 'other';
    $(".menu-wrapper").attr('class', 'menu-wrapper ' + className);
  });

  $(".mail-wrapper>.mail-top").click(function() {
    var $ele = $(this).parent();
    $ele.next().show();
    //$ele.append("<h1>New message</h1>");
    $ele.hide();

  });

  $(".menu-toggle-icon input").click(function() {
    $(".menu-wrapper nav").toggleClass("active");
  });

  $('.menu-toggle-icon>input[type=checkbox]').change(function() {
    $(".sidebar").toggleClass("hide").toggleClass("show");
  });

  $('.chk-pin input[type=checkbox]').change(function() {
    if ($(this).is(":checked")) {
      $(".logo").text("Pinned");
    } else {
      $(".logo").text("Inbox");
    }
  });

  $(".link-image").click(function() {
    $(".dropdown").toggle();
  });

  $(".arrow").click(function() {
    $(".collapse", $(this).parents('.msg-recipients')).toggle();
  });

  $(".close").click(function() {
    $(this).parent().toggle();
  });

  $(".floating-btn button:not(.invite-action)").click(function() {
    var $parent = $("#msg-box");
    var $clone = $(".template>.cell").clone(true, true);
    var $items = $("#msg-box .cell");
    var index = $items.length + 1;

    if (index === 1) {
      $clone = $clone.css({
        "padding-left": "480px"
      });
    }
    $clone.find('.wrap').css({
      "z-index": index
    });
    $parent.prepend($clone);
  });

  $("#msg-box").on("click", ".close", function(e) {
    e.stopPropagation();
    $(this).parents(".cell").remove();
  });

  $("#msg-box").on("click", ".minimize", function(e) {
    e.stopPropagation();
    var $ele = $(this);
    if ($ele.hasClass('minimized')) {
      $ele.removeClass('minimized');
      $ele.parents(".msg-title-bar").siblings().css({
        "display": "block"
      });
      $ele.parents(".msg-compose").css({
        height: '500px',
        width: '480px'
      });
      $ele.parents(".cell").css({
        width: '480px'
      });
    } else {
      $ele.addClass('minimized');
      $ele.parents(".msg-title-bar").siblings().css({
        "display": "none"
      });
      $ele.parents(".msg-compose").css({
        height: '40px',
        width: '240px'
      });
      $ele.parents(".cell").css({
        width: '240px'
      });
    }
  });

  $(".search-box input[type='text']").click(function() {
    $(".wrapper").hide(50);
    $(".menu-wrapper").addClass("search");
    $(".search-result").removeClass("search-hide");
    $(".logo").text("Back");
    $(".sidebar").addClass("hide");
  });

  $(".back, .logo").on("click", toggleFunc);

  $('#msg-box').on("click", '.msg-title-bar', updateZIndex);

  function toggleFunc() {
    $(".menu-wrapper").removeClass("search");
    $(".search-result").addClass("search-hide");
    $(".search-box input[type='text']").val('');
    $(".wrapper").show();

    if ($(".chk-pin input[type='checkbox']").is(":checked")) {
      $(".logo").text("Pinned");
    } else {
      $(".logo").text("Inbox");
    }
  }


  function updateZIndex() {
    var highestIndex = 0;
    var items = $(".msg-wrapper .cell");
    var child = $(this).parents('.cell');
    var index = $(".cell").index(child);

    if (items.length < 1) return;

    items.each(function() {
      var currentIndex = parseInt($(this).find('.wrap').css("zIndex"), 10);
      if (currentIndex > highestIndex) {
        highestIndex = currentIndex;
      }
    });

    changeIndex(items, index, highestIndex);

  }

  function changeIndex(items, fromIndex, highestIndex) {
    for (var i = fromIndex; i >= 0; i--, highestIndex--) {if (window.CP.shouldStopExecution(1)){break;}
      var current = $(items[i]).find('.wrap');
      current.css('zIndex', highestIndex);
    }
window.CP.exitedLoop(1);


    for (var i = fromIndex + 1; i < items.length; i++, highestIndex--) {if (window.CP.shouldStopExecution(2)){break;}
      var current = $(items[i]).find('.wrap');
      current.css('zIndex', highestIndex);
    }
window.CP.exitedLoop(2);

  }


  $(".send-btn-stop").click(function(e){
        var rippler = $(this);

        if(rippler.find(".ink").length == 0) {
            rippler.append("<span class='ink'></span>");
        }

        var ink = rippler.find(".ink");

        ink.removeClass("animate");

        if(!ink.height() && !ink.width())
        {
            var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
            ink.css({height: d, width: d});
        }

        var x = e.pageX - rippler.offset().left - ink.width()/2;
        var y = e.pageY - rippler.offset().top - ink.height()/2;

        ink.css({
          top: y+'px',
          left:x+'px'
        }).addClass("animate");
    });

});
  //# sourceURL=pen.js
  </script>






 </body></html>
