<?php
class Company {
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;

    public static $total_companies_created = 0;
    public static $avg_annual_costs = [];

    public function __construct($name, $location, $tot_employees = 0, $avg_salary = 0) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->avg_salary = $avg_salary;

        self::$total_companies_created++;
        self::$avg_annual_costs[] = $this->avg_salary * 12 * $this->tot_employees;
    }

    public function printCompanyInfo() {
        if ($this->tot_employees > 0) {
            echo "L’ufficio {$this->name} con sede in {$this->location} ha ben {$this->tot_employees} dipendenti\n";
        } else {
            echo "L’ufficio {$this->name} con sede in {$this->location} non ha dipendenti\n";
        }
    }

    public function calculateExpense($months) {
        return $this->avg_salary * $this->tot_employees * $months;
    }

    public function printExpense($months) {
        $expense = $this->calculateExpense($months);
        echo "La spesa per {$months} mesi è: {$expense} euro\n";
    }

    public static function printTotalCompaniesCreated() {
        echo "Numero totale di aziende create: " . self::$total_companies_created . "\n";
    }

    public static function printAvgAnnualCosts() {
        $total_avg_costs = 0;
        foreach (self::$avg_annual_costs as $cost) {
            $total_avg_costs += $cost;
        }
        $avg_cost = $total_avg_costs / self::$total_companies_created;
        echo "Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di {$avg_cost} all’anno\n";
    }
}

// Creazione delle istanze di 5 aziende diverse
$company1 = new Company("Aulab", "Italia", 50, 3000);
$company2 = new Company("TechCorp", "USA", 100, 5000);
$company3 = new Company("Innova", "Germania", 75, 4000);
$company4 = new Company("SoftSolutions", "Francia", 30, 3500);
$company5 = new Company("NextGen", "UK", 60, 4500);

// Stampa delle informazioni di ciascuna azienda
$company1->printCompanyInfo();
$company2->printCompanyInfo();
$company3->printCompanyInfo();
$company4->printCompanyInfo();
$company5->printCompanyInfo();

// Calcolo e stampa della spesa per un numero di mesi
$company1->printExpense(6);
$company2->printExpense(6);
$company3->printExpense(6);
$company4->printExpense(6);
$company5->printExpense(6);

// Stampa del numero totale di aziende create
Company::printTotalCompaniesCreated();

// Stampa del costo medio annuale relativo ai dipendenti di ogni azienda
Company::printAvgAnnualCosts();
?>
