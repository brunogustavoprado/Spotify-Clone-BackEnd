<?php

class functions
{
  public static function logout()
    {
        session_destroy();
        session_abort();
        header('location: index.php');
    }
}