<?php 

interface People 
{
    public function doSomething();
}

interface Worker extends People 
{
    public function doJob();
}

interface Student extends Worker 
{
    public function doExtraSomething();
}

class RemoteWorker implements Worker 
{
    public function doSomething()
    {
        return 'do something from '.__CLASS__;
    }

    public function doJob()
    {
        return 'do job from '.__CLASS__;
    }
}

class FactoryWorker implements Worker 
{
    public function doSomething()
    {
        return 'do something from '.__CLASS__;;
    }

    public function doJob()
    {
        return 'do job from '.__CLASS__;;
    }
}

class CollegeStudent implements Student
{
    public function doSomething()
    {
        return 'do something from '.__CLASS__;;
    }

    public function doExtraSomething()
    {
        return 'do extra something from '.__CLASS__;;
    }

    public function doJob()
    {
        return 'do job from '.__CLASS__;;
    }
}

class HighSchoolStudent implements Student
{
    public function doSomething()
    {
        return 'do something from '.__CLASS__;;
    }

    public function doExtraSomething()
    {
        return 'do extra something from '.__CLASS__;;
    }

    public function doJob()
    {
        return 'do job from '.__CLASS__;;
    }
}


$remote = new RemoteWorker();
echo $remote->doSomething();
echo PHP_EOL;
echo $remote->doJob();
echo PHP_EOL;
echo PHP_EOL;

$factory = new FactoryWorker();
echo $factory->doSomething();
echo PHP_EOL;
echo $factory->doJob();
echo PHP_EOL;
echo PHP_EOL;

$college = new CollegeStudent();
echo $college->doSomething();
echo PHP_EOL;
echo $college->doJob();
echo PHP_EOL;
echo PHP_EOL;

$highschool = new CollegeStudent();
echo $highschool->doSomething();
echo PHP_EOL;
echo $highschool->doJob();
echo PHP_EOL;
echo PHP_EOL;
