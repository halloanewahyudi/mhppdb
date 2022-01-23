<?= $this->extend('layouts/main-test'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <div class="card">
        <div class="parent">
            <div class="top-div"> <img src="https://imgur.com/3U0Yawd.png">
                <h3>Eden</h3>
            </div>
            <ul class="progress-bar">
                <li class="active"></li>
                <li></li>
                <li></li>
                <!--<li></li>-->
            </ul>
        </div>
        <div class="main active">
            <div class="content">
                <h4>Welcome! First things first...</h4>
                <p>You can always change them later.</p>
            </div>
            <div class="input-text"> <input type="text" placeholder="Steve Jobs" id="full-name" require> <span>Full Name</span> </div>
            <div class="input-text"> <input type="text" placeholder="Steve"> <span>Display Name</span> </div>
            <div class="button"> <button class="create-workspace">Create Workspace</button> </div>
        </div>
        <div class="main">
            <div class="content">
                <h4>Let's set up a home for all your work</h4>
                <p>You can always create another workspace later.</p>
            </div>
            <div class="input-text"> <input type="text" placeholder="Eden" require> <span>Workspace Name</span> </div>
            <div class="input-text"> <input type="text" placeholder="Example : https://www.google.com/"> <span>Workspace URL(optional)</span> </div>
            <div class="button button_gap"> <button class="back-click">Back</button> <button class="next-click">Next</button> </div>
        </div>
        <div class="main">
            <div class="content">
                <h4>How are you planning to use Eden?</h4>
                <p>We'll stream line your setup accordingly.</p>
            </div>
            <div class="radio-text"> <input type="radio" name="Select" id="radio-button-1"> <input type="radio" name="Select" id="radio-button-2"> <label for="radio-button-1" class="radio-button-1"> <i class="fa fa-user"></i>
                    <h5>For Myself</h5>
                    <p>Write better.Think more clearly.Stay organized.</p>
                </label> <label for="radio-button-2" class="radio-button-2"> <i class="fa fa-users"></i>
                    <h5>With my team</h5>
                    <p>Wikis,docs,tasks and projects all in one space.</p>
                </label> </div>
            <div class="button button_gap1"> <button class="back-click">Back</button> <button class="finish-click">Finish</button> </div>
        </div>
        <div class="main"> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /> </svg>
            <div class="content">
                <h2>Congratulations! <span id="shown_name"></span></h2>
                <p>You have completed onboarding,you can start using the Eden!</p>
            </div>
            <div class="button launch"> <button>Launch Eden</button> </div>
        </div>
    </div>
</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

* {
    margin: 0;
    padding: 0
}

.container {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #e5e9f1
}

.card {
    height: 420px;
    width: 330px;
    background-color: #fff;
    border-radius: 10px;
    padding: 10px 20px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

.main {
    display: none
}

.active {
    display: block !important
}

.d-none {
    display: none !important
}

.parent {
    margin-top: 20px;
    margin-bottom: 50px
}

.card .top-div {
    display: flex;
    justify-content: center;
    align-items: center
}

.top-div img {
    width: 20px;
    margin-right: 7px
}

.progress-bar {
    display: flex;
    list-style: none;
    counter-reset: container 0
}

.progress-bar li {
    display: flex;
    list-style: none;
    counter-increment: container 1;
    position: relative;
    margin-right: 133px;
    margin-top: 20px
}

.progress-bar li::before {
    content: counter(container);
    position: absolute;
    height: 25px;
    width: 25px;
    border-radius: 50%;
    border: 1px solid #eef1f7;
    text-align: center;
    line-height: 26px;
    z-index: 10;
    background-color: #fff
}

.progress-bar li::after {
    content: '';
    position: absolute;
    height: 2px;
    width: 140px;
    background-color: #f5f7fa;
    top: 12px;
    right: -10px
}

.progress-bar li.active::before {
    background-color: #664de5;
    border: none;
    color: #fff
}

.progress-bar li.active::after {
    background-color: #664de5 !important
}

.progress-bar li:first-child:after {
    display: none
}

.content {}

.content h2 {
    font-size: 22px
}

.content p {
    font-size: 12px;
    color: #9ca4b4;
    font-weight: 600
}

.input-text {
    position: relative;
    margin-top: 30px
}

input[type="text"] {
    width: 100%;
    height: 40px;
    border: none;
    border: 1px solid #f8f7fa;
    outline: none;
    padding: 0 10px;
    box-sizing: border-box;
    font-size: 12px;
    border-radius: 5px
}

.radio-text {
    display: flex;
    gap: 20px
}

input[type="radio"] {
    display: none
}

.radio-text label {
    height: 125px;
    width: 100%;
    border: 1px solid #edf1f6;
    border-radius: 5px;
    padding: 5px 10px;
    box-sizing: border-box;
    cursor: pointer
}

.radio-text label h5 {
    margin-top: 10px
}

.radio-text label p {
    font-size: 12px;
    margin-top: 10px;
    font-weight: 600;
    color: #99a1b2
}

#radio-button-1:checked~.radio-button-1,
#radio-button-2:checked~.radio-button-2 {
    border-color: #a89af0
}

#radio-button-1:checked~.radio-button-1 i,
#radio-button-2:checked~.radio-button-2 i {
    color: blue
}

.input-text span {
    position: absolute;
    left: 0;
    top: -16px;
    font-size: 11px;
    font-weight: 900;
    color: #000
}

::placeholder {
    color: #ccc
}

.warning {
    border: 1px solid red !important
}

.button {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px
}

.button button {
    height: 40px;
    width: 100%;
    background-color: #654de4;
    font-size: 12px;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.5s
}

.button button:hover {
    background-color: #361db7
}

.button_gap {
    gap: 20px
}

.button_gap1 {
    margin-top: 46px;
    gap: 20px
}

.launch {
    margin-top: 75px
}

.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 2;
    stroke-miterlimit: 10;
    stroke: #7ac142;
    fill: none;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards
}

.checkmark {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #fff;
    stroke-miterlimit: 10;
    margin: 10% auto;
    box-shadow: inset 0px 0px 0px #7ac142;
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0
    }
}

@keyframes scale {

    0%,
    100% {
        transform: none
    }

    50% {
        transform: scale3d(1.1, 1.1, 1)
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0px 0px 0px 30px #7ac142
    }
}
</style>
<script>
    var create_workspace=document.querySelector(".create-workspace");
var next_click=document.querySelectorAll(".next-click");
var back_click=document.querySelectorAll(".back-click");
var finish_click=document.querySelector(".finish-click");
var main_form=document.querySelectorAll(".main");
var list=document.querySelectorAll(".progress-bar li")
let formnumber=0;


create_workspace.addEventListener('click',function(){
if(!validateform()){
return false;
}
formnumber++;
updateform();
progress_forward();
});

next_click.forEach(function(next_page){
next_page.addEventListener('click',function(){
if(!validateform()){
return false;
}
formnumber++;
updateform();
progress_forward();
});
});


back_click.forEach(function(back_page){
back_page.addEventListener('click',function(){
formnumber--;
updateform();
});
});

finish_click.addEventListener('click',function(){
// if(!validateform()){
// return false;
// }
formnumber++;
updateform();
var remove_progress=document.querySelector(".progress-bar");
remove_progress.classList.add('d-none');
});
function progress_forward(){
list[formnumber].classList.add('active');
}



function updateform(){
main_form.forEach(function(main_number){
main_number.classList.remove('active');
});
main_form[formnumber].classList.add('active');
}

function validateform(){
validate=true;
var validate_form=document.querySelectorAll(".main.active input");
validate_form.forEach(function(val){
val.classList.remove('warning');
if(val.hasAttribute('require')){
if(val.value.length==0){
validate=false;
val.classList.add('warning');
}
}
});
return validate;
}
</script>
<?= $this->endSection(); ?>