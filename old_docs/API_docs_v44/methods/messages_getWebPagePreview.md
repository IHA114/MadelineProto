---
title: messages.getWebPagePreview
description: messages.getWebPagePreview parameters, return type and example
---
## Method: messages.getWebPagePreview  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|message|[string](../types/string.md) | Yes|


### Return type: [MessageMedia](../types/MessageMedia.md)

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

$MessageMedia = $MadelineProto->messages->getWebPagePreview(['message' => string, ]);
```

Or, if you're into Lua:

```
MessageMedia = messages.getWebPagePreview({message=string, })
```


## Return value 

If the length of the provided message is bigger than 4096, the message will be split in chunks and the method will be called multiple times, with the same parameters (except for the message), and an array of [MessageMedia](../types/MessageMedia.md) will be returned instead.


