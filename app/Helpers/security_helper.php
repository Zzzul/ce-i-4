<?php

function encrypt_password($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verify_password($password, $hash)
{
    return password_verify($password, $hash);
}

function generate_token($length = 32)
{
    return bin2hex(random_bytes($length));
}