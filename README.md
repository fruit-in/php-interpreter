# php-interpreter
## PHub Premium
PHub Premium is an esoteric programming language inspired by [Ook!](https://www.dangermouse.net/esoteric/ook.html).
There are only three distinct syntax elements, which have a one-to-one correspondence with Ook!:
* `P` and `Ook.`
* `Hub` and `Ook?`
* `Premium` and `Ook!`

### Commands
Combine them into groups of two. Each combination represents a command. There are a total of eight commands:
Ook!       |PHub Premium    |Description
:---------:|:--------------:|-----------
`Ook. Ook?`|`PHub`          |Move the pointer to the right.
`Ook? Ook.`|`HubP`          |Move the pointer to the left.
`Ook. Ook.`|`PP`            |Increment the memory cell under the pointer.
`Ook! Ook!`|`PremiumPremium`|Decrement the memory cell under the pointer.
`Ook. Ook!`|`PPremium`      |Input a character and store it in the cell at the pointer.
`Ook! Ook.`|`PremiumP`      |Output the character signified by the cell at the pointer.
`Ook! Ook?`|`PremiumHub`    |Jump past the matching `Ook? Ook!` if the cell under the pointer is 0.
`Ook? Ook!`|`HubPremium`    |Jump back to the matching `Ook! Ook?` 
