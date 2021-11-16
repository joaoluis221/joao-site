<?php

$nome = $_POST['txtnome'];
$turma = $_POST['txtturma'];
$comentario = $_POST['txtcomentario'];

echo "<h1>Comentário</h1>";
echo "<p>Nome: $nome</p>";
echo "<p>Turma: $turma</p>";
echo "<p>Comentario: $comentario</p>";

$sql = "INSERT into comentarios 
     (nome, turma, comentario) 
    VALUES 
     ('$nome', '$turma', '$comentario')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=comentarios', 'root', '');

$conexao->exec($sql);

echo "<p>Gravado com sucesso</p>";
?>
<form class="form-horizontal" action="forms/comentario.php" method="POST">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="txtnome" class="form-control" id="name" placeholder="Seu Nome" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="txtturma" id="subject" placeholder="Sua Turma" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="txtcomentario" rows="5" placeholder="Mensagem" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Enviar Mensagem</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Entre em contato
                      </h5>
                    </div>
                    <div class="more-info">
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Itapira, São Paulo</li>
                        <li><span class="bi bi-phone"></span> (19) 99305-8767</li>
                        <li><span class="bi bi-envelope"></span> joaoluis2211@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://www.instagram.com/joaoluis221.jl/"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href="https://github.com/joaoluis221"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->