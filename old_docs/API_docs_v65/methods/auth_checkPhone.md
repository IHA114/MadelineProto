---
title: auth.checkPhone
description: auth.checkPhone parameters, return type and example
---
## Method: auth.checkPhone  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|phone\_number|[string](../types/string.md) | Yes|


### Return type: [auth\_CheckedPhone](../types/auth_CheckedPhone.md)

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

$auth_CheckedPhone = $MadelineProto->auth->checkPhone(['phone_number' => string, ]);
```

Or, if you're into Lua:

```
auth_CheckedPhone = auth.checkPhone({phone_number=string, })
```

