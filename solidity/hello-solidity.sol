pragma solidity ^0.4.12;

contract test{

    address x = 0x123;
    address myAddress = this;

    function foo() public{
        suicide(x);       // Noncompliant
    }

    function useSuperPowers(){
        if (msg.sender != myAddress) { throw; } // Noncompliant {{Use revert instead of throw.}}
    }
}