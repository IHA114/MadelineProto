---
title: photos.deletePhotos
description: photos.deletePhotos parameters, return type and example
---
## Method: photos.deletePhotos  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|id|Array of [InputPhoto](../types/InputPhoto.md) | Yes|


### Return type: [Vector\_of\_long](../types/long.md)

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

$Vector_of_long = $MadelineProto->photos->deletePhotos(['id' => [InputPhoto], ]);
```

Or, if you're into Lua:

```
Vector_of_long = photos.deletePhotos({id={InputPhoto}, })
```

