<?php

namespace App\Validation;

use App\Models\User;

class AuthValidation
{
  function check_password($str, string $field, array $data): bool
  {
    $model_user = new User();

    $user = $model_user->where('username', $data['username'])->first();

    if ($user) {
      if (password_verify($data['username'], $user->password)) {
        return true;
      }
    }

    return false;
  }
}