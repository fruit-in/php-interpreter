# php-interpreter
A PHub Premium interpreter written in php

## PHub Premium
PHub Premium is an esoteric programming language inspired by [Ook!](https://www.dangermouse.net/esoteric/ook.html).

There are only three distinct syntax elements:
* `P`
* `Hub`
* `Premium`

### Commands
Combine them into groups of two. Each combination represents a command. There are a total of eight commands:

PHub Premium|Description
:----------:|-----------
`PHub`      |Move the pointer to the right.
`HubP`      |Move the pointer to the left.
`PP`        |Increment the memory cell under the pointer.
`HubHub`    |Decrement the memory cell under the pointer.
`PPremium`  |Input a character and store it in the cell at the pointer.
`PremiumP`  |Output the character signified by the cell at the pointer.
`PremiumHub`|Jump past the matching `Ook? Ook!` if the cell under the pointer is 0.
`HubPremium`|Jump back to the matching `Ook! Ook?` unless the cell under the pointer is 0.

### Example
#### Hello World

```
PP PP PP PP PP PP PP PP PremiumHub PHub PP PP PP PP PremiumHub PHub
PP PP PHub PP PP PP PHub PP PP PP PHub PP HubP HubP HubP HubP Hub
Hub HubPremium PHub PP PHub PP PHub HubHub PHub PHub PP PremiumHub Hub
PHub Premium
HubP HubHub HubPremium PHub
PHub Premium
P PHub HubHub HubHub HubHub PremiumP PP PP PP PP
PP PP PP PremiumP PremiumP PP PP PP PremiumP PHub
PHub Premium
P HubP HubHub PremiumP HubP PremiumP PP PP PP PremiumP HubHub HubHub
HubHub HubHub HubHub HubHub PremiumP HubHub HubHub HubHub HubHub Hub
Hub HubHub HubHub HubHub PremiumP PHub PHub PP PremiumP PHub PP PP PremiumP
```

## Interpreter
### Usage
```
$ php interpreter.php <file>
```
