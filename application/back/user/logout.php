<?php
unset($_SESSION[_ss . 'username']);
unset($_SESSION[_ss . 'id']);
unset($_SESSION[_ss . 'levelaccess']);
header('location:'.$baseUrl);
