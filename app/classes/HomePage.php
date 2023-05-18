<?php


namespace App\classes;


class HomePage
{
    public $students = [];

    public function __construct()
    {
        $this->students = [
            0 => [
                'name'   => 'Adnan',
                'email'  => 'adnan@bitm.com',
                'mobile' => [
                    'personal'  => '01652348251',
                    'parent'  => '0152364585',
                ],
            ],
            1 => [
                'name'   => 'Shah Poran',
                'email'  => 'shahporan@bitm.com',
                'mobile' => [
                    'personal'  => [
                        0 => '0152453656',
                        1 => '0144456455',
                        2 => '0235564564',
                    ],
                    'parent'  => '01254148159',
                ],
            ],
            2 => [
                'name'   => "Asad",
                'email'  => 'asad@bitm.com',
                'mobile' => [
                    'personal'  => [
                        0 => '01577564584',
                        1 => '01568124454',
                    ],
                    'parent'  => '015254551574',
                ],
            ],
        ];
    }

    public function getStudents ()
    {
        return $this->students;
    }

    public function index ()
    {
        header('Location: route.php?page=home');
//        foreach ($this->students as $student)
//        {
//            foreach ($student as $value)
//            {
//                if (is_array($value))
//                {
//                    foreach ($value as $item)
//                    {
//                        if (is_array($item))
//                        {
//                            foreach ($item as $number)
//                            {
//                                echo $number.'<br/>';
//                            }
//                        } else {
//                            echo $item.'<br/>';
//                        }
//                    }
//                } else {
//                    echo $value.'<br/>';
//                }
//            }
//        }
    }
}