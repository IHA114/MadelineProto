---
title: phone.setCallRating
description: phone.setCallRating parameters, return type and example
---
## Method: phone.setCallRating  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|peer|[InputPhoneCall](../types/InputPhoneCall.md) | Yes|
|rating|[int](../types/int.md) | Yes|
|comment|[string](../types/string.md) | Yes|


### Return type: [Updates](../types/Updates.md)

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

$Updates = $MadelineProto->phone->setCallRating(['peer' => InputPhoneCall, 'rating' => int, 'comment' => string, ]);
```

Or, if you're into Lua:

```
Updates = phone.setCallRating({peer=InputPhoneCall, rating=int, comment=string, })
```

