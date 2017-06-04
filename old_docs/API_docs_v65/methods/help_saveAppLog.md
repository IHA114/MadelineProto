---
title: help.saveAppLog
description: help.saveAppLog parameters, return type and example
---
## Method: help.saveAppLog  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|events|Array of [InputAppEvent](../types/InputAppEvent.md) | Yes|


### Return type: [Bool](../types/Bool.md)

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

$Bool = $MadelineProto->help->saveAppLog(['events' => [InputAppEvent], ]);
```

Or, if you're into Lua:

```
Bool = help.saveAppLog({events={InputAppEvent}, })
```

