<?php
namespace App\Strategy;
abstract class RequiredAbstractClass implements iStrategy
{
    protected array $objects = [];

    public function setObject($object): void
    {
        $this->objects[] = $object;
    }

    abstract protected function formatToStr($elem, $val): string;
    private function fileName() :string
    {
        $fullNameClass = get_called_class();
        $arrToClass = explode('\\', $fullNameClass);
        $className = $arrToClass[count($arrToClass) - 1];

        $date = date('d-m-Y');

        return $className . '_' . $date . '.txt';
    }

    public function execute(): array
    {
        $str = '';
        foreach ($this->objects as $object) {
            foreach ($object as $elem => $val) {
                $str .= $this->formatToStr($elem, $val);
            }
            $str .= '_______' . "\n";
        }
        return [
            'name' => $this->fileName() . "\n",
            'text' => $str,
        ];

    }
}



