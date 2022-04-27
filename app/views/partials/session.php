<?php 
    session_start(); 
    if(!auth()){
        redirect('/');
    }

