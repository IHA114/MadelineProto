---
title: account.getTmpPassword
description: account.getTmpPassword parameters, return type and example
---
## Method: account.getTmpPassword  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|password\_hash|[bytes](../types/bytes.md) | Yes|
|period|[int](../types/int.md) | Yes|


### Return type: [account\_TmpPassword](../types/account_TmpPassword.md)

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

$account_TmpPassword = $MadelineProto->account->getTmpPassword(['password_hash' => bytes, 'period' => int, ]);
```

Or, if you're into Lua:

```
account_TmpPassword = account.getTmpPassword({password_hash=bytes, period=int, })
```

