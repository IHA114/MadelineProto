---
title: toggleChannelSignMessages
description: Enables or disables sender signature on sent messages in the channel. Needs creator privileges in the channel. Not available for supergroups
---
## Method: toggleChannelSignMessages  
[Back to methods index](index.md)


Enables or disables sender signature on sent messages in the channel. Needs creator privileges in the channel. Not available for supergroups

### Params:

| Name     |    Type       | Required | Description |
|----------|:-------------:|:--------:|------------:|
|channel\_id|[int](../types/int.md) | Yes|Identifier of the channel|
|sign\_messages|[Bool](../types/Bool.md) | Yes|New value of sign_messages|


### Return type: [Ok](../types/Ok.md)

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

$Ok = $MadelineProto->toggleChannelSignMessages(['channel_id' => int, 'sign_messages' => Bool, ]);
```

Or, if you're into Lua:

```
Ok = toggleChannelSignMessages({channel_id=int, sign_messages=Bool, })
```

