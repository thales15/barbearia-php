<?php
//exercícios

$dados = [
   1 => ["horaInicio" => "08:00",
        "horaFim" => "09:00",
        "intervaloMinutos" => "30" 
],
2   => ["horaInicio"=> "07:50",
"horaFim" => "10:00",
"intervaloMinutos" => "50"
]
];
function formatarData(string $data): string {
   return date('d/m/Y', strtotime($data));
}

function gerarHorariosDisponiveis($array){
    for ($i= 1;$i<count($array);$i++){
    foreach($array as $item ){
    $horaInicio = date("H:i", strtotime($item[$i]["horaInicio"]));
    $horaFim = date("H:i", strtotime($item[$i]["horaFim"]));

    return "de $horaInicio até $horaFim a cada ". $item[$i]["intervaloMinutos"]. " minutos";
    }
}
}

function validarHorarioAgendamento($horario, $diaSemana): bool{
    
}

// Funções úteis para a Barbearia

function formatarPreco(float $preco): string {
    return "R$ " . number_format($preco, 2, ',', '.');
}



function calcularDesconto(float $preco, float $percentual = 10): float {
    return $preco * (1 - ($percentual / 100));
}

function saudacao(string $nome = "Cliente"): string {
    $hora = (int)date('H');
    if ($hora < 12) return "Bom dia, " . $nome . "!";
    if ($hora < 18) return "Boa tarde, " . $nome . "!";
    return "Boa noite, " . $nome . "!";
}

function diasDaSemana($dia = null) {
    $dias = [
        1 => "Segunda-feira", 2 => "Terça-feira", 3 => "Quarta-feira",
        4 => "Quinta-feira", 5 => "Sexta-feira", 6 => "Sábado", 7 => "Domingo"
    ];
    return $dia ? $dias[$dia] ?? "Dia inválido" : $dias;
}

// Testando as funções
echo saudacao("João Silva") . "<br>";
echo "Preço normal: " . formatarPreco(75.00) . "<br>";
echo "Preço com desconto: " . formatarPreco(calcularDesconto(75.00, 15)) . "<br>";
echo "Hoje é " . diasDaSemana((int)date('N')) . "<br>";

//exercícios
echo "data formatada: ". formatarData("21-04-2022") ."<br>";
echo "Horários disponiveis: ". gerarHorariosDisponiveis($dados);
?>