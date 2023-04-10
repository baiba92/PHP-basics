<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function show_user_name_and_balance(): string
    {
        $formatted = number_format(abs($this->balance), 2);
        $outputBalance = $this->balance < 0 ? '-$' . $formatted : '$' . $formatted;
        return $this->name . ', ' . $outputBalance;
    }
}