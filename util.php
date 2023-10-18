<?php
function createCSV(array $data, $filename = 'visitantes.csv')
{
    if (empty($data)) {
        throw new InvalidArgumentException('Data array is empty.');
    }

    // Abre o arquivo para escrita
    $file = fopen($filename, 'w');

    // Escreve o cabeçalho (nomes das colunas)
    $header = ['Id', 'Nome', 'Avaliação', 'Data e hora']; // Defina os nomes das colunas
    fputcsv($file, $header);

    // Escreve os dados
    foreach ($data as $row) {
        fputcsv($file, [
            $row->getId(),
            $row->getName(),
            $row->getRating(),
            $row->getDate()
        ]);
    }

    // Fecha o arquivo
    fclose($file);
    
}