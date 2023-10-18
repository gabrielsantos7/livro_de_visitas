<?php
function createCSV(array $data, $filename = 'visitantes.csv')
{
  if (empty($data)) {
    throw new InvalidArgumentException('Data array is empty.');
  }

  // Debug: Verifica se o arquivo está sendo criado corretamente
  echo 'Opening file for writing: ' . $filename . '<br>';

  // Abre o arquivo para escrita
  $file = fopen($filename, 'w');

  // Debug: Verifica se o arquivo foi aberto corretamente
  if (!$file) {
    echo 'Failed to open the file for writing.';
    return;
  }

  // Escreve o cabeçalho (nomes das colunas)
  $header = array_keys(get_object_vars($data[0]));
  fputcsv($file, $header);

  // Escreve os dados
  foreach ($data as $row) {
    fputcsv($file, get_object_vars($row));
  }

  // Debug: Verifica se os dados foram escritos corretamente
  echo 'Data written to file successfully.';

  // Fecha o arquivo
  fclose($file);
}