# php-interpreter
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
