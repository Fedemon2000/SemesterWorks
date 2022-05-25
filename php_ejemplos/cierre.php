<?php
session_start(); //reanudadr session
session_destroy();
header('location:login.html');