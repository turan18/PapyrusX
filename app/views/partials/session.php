<?php 
    if(!isset($_SESSION)){
        session_start(); 
    }
    if(auth() == null){
        redirect('/');
    }

