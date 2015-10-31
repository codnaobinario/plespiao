<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$emailplespiao     = 'contato@plespiao.org.br';
$nomeremetente     = $_POST['form-name'];
$emailremetente    = trim($_POST['form-email']);

$emaildestinatario = 'dep.afonsomotta@camara.leg.br, dep.alexandreleite@camara.leg.br, dep.brunafurlan@camara.leg.br, dep.carlosmarun@camara.leg.br, dep.danielalmeida@camara.leg.br, dep.delegadoedermauro@camara.leg.br, dep.dr.joao@camara.leg.br, dep.edmararruda@camara.leg.br, dep.efraimfilho@camara.leg.br, dep.elmarnascimento@camara.leg.br, dep.erikakokay@camara.leg.br, dep.fabiofaria@camara.leg.br, dep.felixmendoncajunior@camara.leg.br, dep.gabrielguimaraes@camara.leg.br, dep.goretepereira@camara.leg.br, dep.hildorocha@camara.leg.br, dep.ivanvalente@camara.leg.br, dep.jeffersoncampos@camara.leg.br, dep.jeronimogoergen@camara.leg.br, dep.josenunes@camara.leg.br, dep.laertebessa@camara.leg.br, dep.laudiviocarvalho@camara.leg.br, dep.leonardopicciani@camara.leg.br, dep.lincolnportela@camara.leg.br, dep.lucasvergilio@camara.leg.br, dep.manoeljunior@camara.leg.br, dep.marcioalvino@camara.leg.br, dep.marcomaia@camara.leg.br, dep.marionegromontejr@camara.leg.br, dep.marxbeltrao@camara.leg.br, dep.maurolopes@camara.leg.br, dep.mendoncafilho@camara.leg.br, dep.moemagramacho@camara.leg.br, dep.odelmoleao@camara.leg.br, dep.onyxlorenzoni@camara.leg.br, dep.paulofreire@camara.leg.br, dep.pedrouczai@camara.leg.br, dep.professorvictoriogalli@camara.leg.br, dep.reginaldolopes@camara.leg.br, dep.renataabreu@camara.leg.br, dep.ricardobarros@camara.leg.br, dep.ricardotripoli@camara.leg.br, dep.robertobritto@camara.leg.br, dep.rossoni@camara.leg.br, dep.rubensotoni@camara.leg.br, dep.sandroalex@camara.leg.br, dep.sarneyfilho@camara.leg.br, dep.silascamara@camara.leg.br, dep.silviocosta@camara.leg.br, dep.sorayasantos@camara.leg.br, dep.tiaeron@camara.leg.br, dep.ulduricojunior@camara.leg.br, dep.valtenirpereira@camara.leg.br, dep.vitorvalim@camara.leg.br, dep.wellingtonroberto@camara.leg.br, dep.wolneyqueiroz@camara.leg.br, dep.aguinaldoribeiro@camara.leg.br, dep.alceumoreira@camara.leg.br, dep.alessandromolon@camara.leg.br, dep.altineucortes@camara.leg.br, dep.andrefufuca@camara.leg.br, dep.andremoura@camara.leg.br, dep.antoniobulhoes@camara.leg.br, dep.arnaldofariadesa@camara.leg.br, dep.arthurlira@camara.leg.br, dep.arthuroliveiramaia@camara.leg.br, dep.bacelar@camara.leg.br, dep.betinhogomes@camara.leg.br, dep.bonifaciodeandrada@camara.leg.br, dep.brunocovas@camara.leg.br, dep.capitaoaugusto@camara.leg.br, dep.carlosbezerra@camara.leg.br, dep.celiosilveira@camara.leg.br, dep.chicoalencar@camara.leg.br, dep.covattifilho@camara.leg.br, dep.cristianebrasil@camara.leg.br, dep.daniloforte@camara.leg.br, dep.deciolima@camara.leg.br, dep.delegadowaldir@camara.leg.br, dep.esperidiaoamin@camara.leg.br, dep.evandrogussi@camara.leg.br, dep.faustopinato@camara.leg.br, dep.felipemaia@camara.leg.br, dep.franciscofloriano@camara.leg.br, dep.giovanicherini@camara.leg.br, dep.glauberbraga@camara.leg.br, dep.gonzagapatriota@camara.leg.br, dep.hirangoncalves@camara.leg.br, dep.indiodacosta@camara.leg.br, dep.janetecapiberibe@camara.leg.br, dep.jhc@camara.leg.br, dep.joaocampos@camara.leg.br, dep.jorginhomello@camara.leg.br, dep.josecarlosaleluia@camara.leg.br, dep.josefogaca@camara.leg.br, dep.mainha@camara.leg.br, dep.josementor@camara.leg.br, dep.juliodelgado@camara.leg.br, dep.juscelinofilho@camara.leg.br, dep.jutahyjunior@camara.leg.br, dep.lucianoducci@camara.leg.br, dep.luistibe@camara.leg.br, dep.luizcouto@camara.leg.br, dep.luizsergio@camara.leg.br, dep.marceloaro@camara.leg.br, dep.marcotebaldi@camara.leg.br, dep.marcosrogerio@camara.leg.br, dep.mariadorosario@camara.leg.br, dep.maxfilho@camara.leg.br, dep.nelsonmarchezanjunior@camara.leg.br, dep.osmarserraglio@camara.leg.br, dep.padrejoao@camara.leg.br, dep.paeslandim@camara.leg.br, dep.pastoreurico@camara.leg.br, dep.paulomagalhaes@camara.leg.br, dep.paulomaluf@camara.leg.br, dep.pauloteixeira@camara.leg.br, dep.pedrocunhalima@camara.leg.br, dep.pedrovilela@camara.leg.br, dep.pr.marcofeliciano@camara.leg.br, dep.rauljungmann@camara.leg.br, dep.rodrigopacheco@camara.leg.br, dep.rogeriorosso@camara.leg.br, dep.ronaldofonseca@camara.leg.br, dep.rubenspereirajunior@camara.leg.br, dep.sergiosouza@camara.leg.br, dep.sergiozveiter@camara.leg.br, dep.tadeualencar@camara.leg.br, dep.valmirprascidelli@camara.leg.br, dep.venezianovitaldorego@camara.leg.br, webmaster@plespiao.org.br';

$assunto          = $_POST['form-subject'];
$mensagem          = $_POST['form-message'];


/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<p>'.$assunto.'</p> <p>'.$mensagem.'</p> <p><b>Ass:</b> '.$nomeremetente.'</p> <hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailplespiao\r\n"; // remetente
$headers .= "Return-Path: $emailplespiao\r\n";
$headers .= "Reply-To: $emailremetente\r\n";
//$headers .= "Bcc: { $emaildestinatario } \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-f$emailplespiao");


 if($envio)
echo "<script>location.href='/'</script>"; // Página que será redirecionada

?>
