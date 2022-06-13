<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

class Student
{

    public $name;
    public $lastname;
    public $grades;

    function __construct($_name, $_lastname, $_grades = [])
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->grades = $_grades;
    }

    // La funzione che inserisce un nuovo voto all'interno dell'array di voti
    public function insertGrade($_grade)
    {
        $this->grades[] = $_grade;
    }

    public function getFullName()
    {
        return $this->name . " " . $this->lastname;
    }

    public function getAverageGrade()
    {
        $gradesSum = 0;
        foreach ($this->grades as $grade) {
            $gradesSum += $grade;
        }
        $avgGrade = $gradesSum / count($this->grades);
        return $avgGrade;
    }
}

$vitantonio = new Student("Vitantonio", "Paparella");
$vitantonio->insertGrade(6);
$vitantonio->insertGrade(8);
// var_dump($vitantonio);

$vittorio = new Student("Vittorio", "Aquilino");
$vittorio->insertGrade(5);
$vittorio->insertGrade(7);
// var_dump($vittorio);

$stefano = new Student("Stefano", "Mastrantonio");
$stefano->insertGrade(8);
$stefano->insertGrade(9);
// var_dump($stefano);

$classroom = [];
$classroom[] = $vitantonio;
$classroom[] = $vittorio;
$classroom[] = $stefano;

// var_dump($classroom);
?>

<ul>
    <?php foreach ($classroom as $student) { ?>
        <li>
            <h2>
                <?php echo $student->getFullName(); ?>
            </h2>
            <p>Voto medio: <?php echo $student->getAverageGrade(); ?></p>
        </li>
    <?php } ?>
</ul>