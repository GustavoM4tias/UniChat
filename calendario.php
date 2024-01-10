<?php
session_start();

if (!isset($_SESSION["user_id"]) || empty($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #calAcademico {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            background-color: #014d8b;
            height: 100%;
            overflow-y: hidden;
        }

        #eventos {
            width: 50vw;
            max-height: 60vh;
            padding: 15px;
            border-radius: 10px;
            color: #f1d4d4;
            overflow-y: auto;
        }

        #eventos::-webkit-scrollbar {
            width: 12px;
        }

        #eventos::-webkit-scrollbar-thumb {
            background-color: #0061b0;
            border-radius: 6px;
            border: 1px solid #00294b;
        }

        #eventos::-webkit-scrollbar-track {
            background-color: #014d8b;
        }

        .tituloCal {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: #fff;
            font-weight: 900;
            font-size: 45px;
            margin-top: 10%;
            text-shadow: 4px 4px 0px rgba(24, 24, 24, 0.5);
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
            font-weight: 600;
        }

        li {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            background-color: #0061b0;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 50px 1fr;
            border: 1px solid #00294b;
        }

        .left-box,
        .right-box {
            padding: 10px;
            border-right: 1px solid #00294b;
            border-bottom: 1px solid #00294b;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .day-number,
        .day-abbr,
        .event-name,
        .event-date {
            font-size: 20px;
        }

        @media (max-width: 767px) {
            #eventos {
                width: 90vw;
            }

            .tituloCal {
                font-size: 32px;
                margin-top: 28%;
            }

            .day-number,
            .day-abbr,
            .event-name,
            .event-date {
                font-size: 16px;
            }
        }
    </style>
    <title>Calendário</title>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <div id="calAcademico">
        <h1 class="tituloCal">Calendário Academico</h1>
        <div id="eventos">
            <ul>
                <li id="janeiro" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">1</span>
                        <span class="day-abbr">Dom</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">CONFRATERNIZAÇÃO UNIVERSAL</span>
                        <span class="event-date">domingo, 1 de janeiro de
                            2023</span>
                    </div>
                </li>
                <li id="fevereiro" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">20</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">RECESSO ESCOLAR</span>
                        <span class="event-date">segunda-feira, 20 de
                            fevereiro
                            de 2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">21</span>
                        <span class="day-abbr">Ter</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">CARNAVAL</span>
                        <span class="event-date">terça-feira, 21 de
                            fevereiro de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">22</span>
                        <span class="day-abbr">Qua</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">4ª FEIRA DE CINZAS -
                            RECESSO</span>
                        <span class="event-date">quarta-feira, 22 de
                            fevereiro
                            de 2023</span>
                    </div>
                </li>
                <li id="abril" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">4</span>
                        <span class="day-abbr">Ter</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">ANIVERSÁRIO DE MARILIA</span>
                        <span class="event-date">terça-feira, 4 de abril de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">7</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">PAIXÃO DE CRISTO</span>
                        <span class="event-date">sexta-feira, 7 de abril de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">8</span>
                        <span class="day-abbr">Sáb</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">RECESSO ESCOLAR</span>
                        <span class="event-date">sábado, 8 de abril de 2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">21</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">TIRADENTES</span>
                        <span class="event-date">sexta-feira, 21 de abril de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">22</span>
                        <span class="day-abbr">Sáb</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">RECESSO ESCOLAR</span>
                        <span class="event-date">sábado, 22 de abril de 2023</span>
                    </div>
                </li>
                <li id="maio" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">1</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">DIA DO TRABALHO</span>
                        <span class="event-date">segunda-feira, 1 de maio de
                            2023</span>
                    </div>
                </li>
                <li id="junho" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">8</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">CORPUS CHRISTI</span>
                        <span class="event-date">quinta-feira, 8 de junho de
                            2023</span>
                    </div>
                </li>
                <li id="julho" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">9</span>
                        <span class="day-abbr">Dom</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">REVOL CONSTITUCIONALISTA SP</span>
                        <span class="event-date">domingo, 9 de julho de 2023</span>
                    </div>
                </li>
                <li id="setembro" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">1</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">INÍCIO DO PRAZO PARA
                            REVISAO DE
                            FALTA1</span>
                        <span class="event-date">sexta-feira, 1 de setembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">7</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">INDEPENDENCIA DO BRASIL</span>
                        <span class="event-date">quinta-feira, 7 de setembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">8</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">RECESSO ESCOLAR</span>
                        <span class="event-date">sexta-feira, 8 de setembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">12</span>
                        <span class="day-abbr">Ter</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">ENCERRAMENTO DO PRAZO PARA
                            REVISAO DE FALTA1</span>
                        <span class="event-date">terça-feira, 12 de setembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">22</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">FÁBRICA DE PROJETOS ÁGEIS
                            II -
                            PROVA 1</span>
                        <span class="event-date">sexta-feira, 22 de setembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">25</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">INÍCIO DO PRAZO PARA
                            REVISAO DA
                            PROVA 1</span>
                        <span class="event-date">segunda-feira, 25 de
                            setembro
                            de 2023</span>
                    </div>
                </li>
                <li id="outubro" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">2</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">INÍCIO DO PRAZO PARA
                            REVISAO DE
                            FALTA2</span>
                        <span class="event-date">segunda-feira, 2 de outubro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">12</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">NOSSA SENHORA DE APARECIDA</span>
                        <span class="event-date">quinta-feira, 12 de outubro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">13</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">RECESSO ESCOLAR</span>
                        <span class="event-date">sexta-feira, 13 de outubro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">14</span>
                        <span class="day-abbr">Sáb</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">RECESSO ESCOLAR</span>
                        <span class="event-date">sábado, 14 de outubro de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">16</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">ENCERRAMENTO DO PRAZO PARA
                            REVISAO DE FALTA2</span>
                        <span class="event-date">segunda-feira, 16 de
                            outubro de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">16</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">ENCERRAMENTO DO PRAZO PARA
                            REVISAO DA PROVA 1</span>
                        <span class="event-date">segunda-feira, 16 de
                            outubro de
                            2023</span>
                    </div>
                </li>
                <li id="novembro" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">1</span>
                        <span class="day-abbr">Qua</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">INÍCIO DO PRAZO PARA
                            REVISAO DE
                            FALTA3</span>
                        <span class="event-date">quarta-feira, 1 de novembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">2</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">FINADOS</span>
                        <span class="event-date">quinta-feira, 2 de novembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">3</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">RECESSO ESCOLAR</span>
                        <span class="event-date">sexta-feira, 3 de novembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">4</span>
                        <span class="day-abbr">Sáb</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">RECESSO ESCOLAR</span>
                        <span class="event-date">sábado, 4 de novembro de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">10</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">ENCERRAMENTO DO PRAZO PARA
                            REVISAO DE FALTA3</span>
                        <span class="event-date">sexta-feira, 10 de novembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">15</span>
                        <span class="day-abbr">Qua</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">PROCLAMAÇÃO DA REPUBLICA</span>
                        <span class="event-date">quarta-feira, 15 de
                            novembro de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">20</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">CONSCIENCIA NEGRA</span>
                        <span class="event-date">segunda-feira, 20 de
                            novembro
                            de 2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">22</span>
                        <span class="day-abbr">Qua</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">INÍCIO DO PRAZO PARA
                            REVISAO DA
                            PROVA 2</span>
                        <span class="event-date">quarta-feira, 22 de
                            novembro de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">22</span>
                        <span class="day-abbr">Qua</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">PROGRAMAÇÃO ORIENTADA A
                            OBJETOS
                            - PROVA 2</span>
                        <span class="event-date">quarta-feira, 22 de
                            novembro de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">23</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">FUNDAMENTOS DE SISTEMAS DE
                            INFORMAÇÃO - PROVA 2</span>
                        <span class="event-date">quinta-feira, 23 de
                            novembro de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">24</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">FÁBRICA DE PROJETOS ÁGEIS
                            II -
                            PROVA 2</span>
                        <span class="event-date">sexta-feira, 24 de novembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">27</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">BANCO DE DADOS - PROVA 2</span>
                        <span class="event-date">segunda-feira, 27 de
                            novembro
                            de 2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">28</span>
                        <span class="day-abbr">Ter</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">DESENVOLVIMENTO WEB - PROVA
                            2</span>
                        <span class="event-date">terça-feira, 28 de novembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">30</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">PROJETO DE VIDA E SOFT
                            SKILLS
                            II - PROVA 2</span>
                        <span class="event-date">quinta-feira, 30 de
                            novembro de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li id="dezembro" class="grid-container">
                    <div class="left-box">
                        <span class="day-number">1</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">INÍCIO DO PRAZO PARA
                            REVISAO DE
                            FALTA5</span>
                        <span class="event-date">sexta-feira, 1 de dezembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">1</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">INÍCIO DO PRAZO PARA
                            REVISAO DE
                            FALTA4</span>
                        <span class="event-date">sexta-feira, 1 de dezembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">5</span>
                        <span class="day-abbr">Ter</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">DESENVOLVIMENTO WEB -
                            SUBSTITUTIVA</span>
                        <span class="event-date">terça-feira, 5 de dezembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">5</span>
                        <span class="day-abbr">Ter</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">FUNDAMENTOS DE SISTEMAS DE
                            INFORMAÇÃO - SUBSTITUTIVA</span>
                        <span class="event-date">terça-feira, 5 de dezembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">6</span>
                        <span class="day-abbr">Qua</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">BANCO DE DADOS -
                            SUBSTITUTIVA</span>
                        <span class="event-date">quarta-feira, 6 de dezembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">6</span>
                        <span class="day-abbr">Qua</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">PROGRAMAÇÃO ORIENTADA A
                            OBJETOS
                            - SUBSTITUTIVA</span>
                        <span class="event-date">quarta-feira, 6 de dezembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">7</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">ENCERRAMENTO DO PRAZO PARA
                            REVISAO DE FALTA4</span>
                        <span class="event-date">quinta-feira, 7 de dezembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">7</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">ENCERRAMENTO DO PRAZO PARA
                            REVISAO DA PROVA 2</span>
                        <span class="event-date">quinta-feira, 7 de dezembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">7</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">ENCERRAMENTO DO PRAZO PARA
                            REVISAO DE FALTA5</span>
                        <span class="event-date">quinta-feira, 7 de dezembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">7</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">PROJETO DE VIDA E SOFT
                            SKILLS
                            II - SUBSTITUTIVA</span>
                        <span class="event-date">quinta-feira, 7 de dezembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">7</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">FÁBRICA DE PROJETOS ÁGEIS
                            II -
                            SUBSTITUTIVA</span>
                        <span class="event-date">quinta-feira, 7 de dezembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">8</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">IMACULADA CONCEIÇÃO</span>
                        <span class="event-date">sexta-feira, 8 de dezembro
                            de
                            2023</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">12</span>
                        <span class="day-abbr">Ter</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">DESENVOLVIMENTO WEB - EXAME</span>
                        <span class="event-date">terça-feira, 12 de dezembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">13</span>
                        <span class="day-abbr">Qua</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">PROGRAMAÇÃO ORIENTADA A
                            OBJETOS
                            - EXAME</span>
                        <span class="event-date">quarta-feira, 13 de
                            dezembro de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">14</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">FUNDAMENTOS DE SISTEMAS DE
                            INFORMAÇÃO - EXAME</span>
                        <span class="event-date">quinta-feira, 14 de
                            dezembro de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">15</span>
                        <span class="day-abbr">Sex</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">FÁBRICA DE PROJETOS ÁGEIS
                            II -
                            EXAME</span>
                        <span class="event-date">sexta-feira, 15 de dezembro
                            de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">18</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">BANCO DE DADOS - EXAME</span>
                        <span class="event-date">segunda-feira, 18 de
                            dezembro
                            de 2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">21</span>
                        <span class="day-abbr">Qui</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">PROJETO DE VIDA E SOFT
                            SKILLS
                            II - EXAME</span>
                        <span class="event-date">quinta-feira, 21 de
                            dezembro de
                            2023 às 19:25</span>
                    </div>
                </li>
                <li class="grid-container">
                    <div class="left-box">
                        <span class="day-number">25</span>
                        <span class="day-abbr">Seg</span>
                    </div>
                    <div class="right-box">
                        <span class="event-name">NATAL</span>
                        <span class="event-date">segunda-feira, 25 de
                            dezembro
                            de 2023</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const currentDate = new Date();
            const currentMonth = currentDate.toLocaleString('default', { month: 'long' }).toLowerCase();

            const targetMonth = document.getElementById(currentMonth);

            if (targetMonth) {
                targetMonth.scrollIntoView({ behavior: 'smooth' });
            }
        });
    </script>
</body>

</html>