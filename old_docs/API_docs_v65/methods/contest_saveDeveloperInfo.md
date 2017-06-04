---
title: contest.saveDeveloperInfo
description: contest.saveDeveloperInfo parameters, return type and example
---
## Method: contest.saveDeveloperInfo  
[Back to methods index](index.md)


### Parameters:

| Name     |    Type       | Required |
|----------|:-------------:|---------:|
|vk\_id|[int](../types/int.md) | Yes|
|name|[string](../types/string.md) | Yes|
|phone\_number|[string](../types/string.md) | Yes|
|age|[int](../types/int.md) | Yes|
|city|[string](../types/string.md) | Yes|


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

$Bool = $MadelineProto->contest->saveDeveloperInfo(['vk_id' => int, 'name' => string, 'phone_number' => string, 'age' => int, 'city' => string, ]);
```

Or, if you're into Lua:

```
Bool = contest.saveDeveloperInfo({vk_id=int, name=string, phone_number=string, age=int, city=string, })
```

