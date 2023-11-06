<?php

interface TableInterface {
    
    public function save(array $data);
}

interface LogInterface {
    public function log(array $data);
}

class Table implements TableInterface, LogInterface {
    public function save (array $data)
    {
        return "Simpan method dari tabel class ";
    }

    public function log(array $data)
    {
        return "Log method dari tabel class";
    }
}

echo (new Table)->save([]);
echo (new Table)->log([]);
?>