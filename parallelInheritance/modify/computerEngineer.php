<?php
class ComputerEngineer implements Engineer {
    private String $type;
    private int $salary;
    private MileStone $mileStone;

    public function setType(String $type) {
        $this->type = $type;
    }

    public function setSalary(int $salary) {
        $this->salary = $salary * 40;
    }

    public function setMileStone(MileStone $mileStone) {
        $this->mileStone = $mileStone;
    }

    public function getType() {
        // TODO Auto-generated method stub
        return $this->type;
    }

    public function getSalary() {
        // TODO Auto-generated method stub
        return $this->salary;
    }

    public function getMileStone() {
        // TODO Auto-generated method stub
        return $this->mileStone;
    }

    public function work() {
        return "Làm trong VP";
    }

    public function target() {
        return "NLRLDSL";
    }

    public function toString() {
        return "ComputerEngineer [type=" + $this->type + ", salary=" + $this->salary
        + ", mileStone=" + $this->mileStone + "]";
    }
}

?>