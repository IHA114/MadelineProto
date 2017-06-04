---
title: auth.checkPassword
description: auth.checkPassword parameters, return type and example
---
## Method: auth.checkPassword  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|password\_hash|[bytes](../types/bytes.md) | Yes|


### Return type: [auth\_Authorization](../types/auth_Authorization.md)

### Example:


```
$MadelineProto = new \danog\MadelineProto\API();
if (isset($token)) { // Login as a bot
    $this->bot_login($token);
}
if (isset($number)) { // Login as a user
    $sentCode = $MadelineProto->phone_login($number);
    echo 'Enter the code you received: ';
    $code = '';
    for ($x = 0; $x < $sentCode['type']['length']; $x++) {
        $code .= fgetc(STDIN);
    }
    $MadelineProto->complete_phone_login($code);
}

$auth_Authorization = $MadelineProto->auth->checkPassword(['password_hash' => bytes, ]);
```

Or, if you're into Lua:

```
auth_Authorization = auth.checkPassword({password_hash=bytes, })
```

