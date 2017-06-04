---
title: account.updateNotifySettings
description: account.updateNotifySettings parameters, return type and example
---
## Method: account.updateNotifySettings  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|peer|[InputNotifyPeer](../types/InputNotifyPeer.md) | Yes|
|settings|[InputPeerNotifySettings](../types/InputPeerNotifySettings.md) | Yes|


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

$Bool = $MadelineProto->account->updateNotifySettings(['peer' => InputNotifyPeer, 'settings' => InputPeerNotifySettings, ]);
```

Or, if you're into Lua:

```
Bool = account.updateNotifySettings({peer=InputNotifyPeer, settings=InputPeerNotifySettings, })
```

