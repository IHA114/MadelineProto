---
title: messages.uninstallStickerSet
description: messages.uninstallStickerSet parameters, return type and example
---
## Method: messages.uninstallStickerSet  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|stickerset|[InputStickerSet](../types/InputStickerSet.md) | Yes|


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

$Bool = $MadelineProto->messages->uninstallStickerSet(['stickerset' => InputStickerSet, ]);
```

Or, if you're into Lua:

```
Bool = messages.uninstallStickerSet({stickerset=InputStickerSet, })
```

