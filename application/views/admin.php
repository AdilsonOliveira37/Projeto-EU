<section id="login" style="min-height: calc(100vh - 83px)" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 text-center">
						<div class="section-title">
                            <h2>AREA DE ADMINISTRADORES</h2>
						</div>
					</div>
				</div>
                
                <div class="row">
					<div class="col-lg-offset-10 col-lg-2 text-center">
						<div class="form-group">
                            <a class="btn btn-link" href="#"><i class="fa fa-user"></i></a>
                            <a class="btn btn-link" href="admin/logoff"><i class="fa fa-sign-out"></i></a>
						</div>
					</div>
                </div>
                
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_work" role="tab" data-toggle="tab">Trabalhos</a>
                        </li>
                        <li>
                            <a href="#tab_skill" role="tab" data-toggle="tab">Habilidades</a>
                        </li>
                        <li>
                            <a href="#tab_user" role="tab" data-toggle="tab">Usuários</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab_work" class="tab-pane active">
                            <div class="container-fluid">
                                <h2 class="text-center"><strong>Gerenciar Trabalhos</strong></h2>
                                <a id="btn_add_work" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp; Add Trabalho</i></a>
                                <table id="dt_works" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="tableheader">
                                            <th>Nome</th>
                                            <th>Imagem</th>
                                            <th>Tecnologias</th>
                                            <th>Descrição</th>
                                            <th>OP</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tab_skill" class="tab-pane">
                        <div class="container-fluid">
                                <h2 class="text-center"><strong>Gerenciar Habilidades</strong></h2>
                                <a id="btn_add_skill" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp; Add Skill</i></a>
                                <table id="dt_skills" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="tableheader">
                                            <th>Nome</th>
                                            <th>Imagem</th>
                                            <th>Descrição</th>
                                            <th>OP</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="tab_user" class="tab-pane">
                        <div class="container-fluid">
                                <h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
                                <a id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp; Add Usuário</i></a>
                                <table id="dt_courses" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="tableheader">
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Usuário</th>
                                            <th>OP</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

			</div>
			<!-- /.container -->
        </section>  
        <div id="modal_work" class="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h4 class="modal-title">Trabalhos</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Formulário de Cadastro de Trabalhos -->
                        <form action="" id="form_work">
                            <input type="idwork" hidden>

                            <!-- Campo de Nome -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Nome</label>
                                <div class="col-lg-10">
                                    <input type="text" id="work_name" name="work_name" class="form-control" maxlength="100">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                           
                            <!-- Campo de Tecnologia -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Tecnologia</label>
                                <div class="col-lg-10">
                                    <input type="text" id="work_tecnologia" name="work_tecnologia" class="form-control" maxlength="100">
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <!-- Campo de Descrição -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Descrição</label>
                                <div class="col-lg-10">
                                    <textarea type="text" id="work_description" name="work_description" class="form-control" ></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <!-- Campo de Imagem -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Imagem</label>
                                <div class="col-lg-10">
                                    <img src="" alt="" style="max-width: 400px; max-height: 400px;" id="work_img_path">
                                    <label class="btn  btn-info">
                                        <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar imagem
                                        <input type="file" id="btn_upload_work_img" accept="image/*" style="display: none;">
                                    </label>
                                    <input id="work_img" name="work_img" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" id="btn_save_work" class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                                </button>
                                <span class="help-block"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal_skill" class="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h4 class="modal-title">Habilidades</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Formulário de Cadastro de Habilidades -->
                        <form action="" id="form_skill">
                            <input type="idskill" hidden>

                            <!-- Campo de Nome -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Nome</label>
                                <div class="col-lg-10">
                                    <input type="text" id="skill_name" name="skill_name" class="form-control" maxlength="100">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            
                            
                            <!-- Campo de Descrição -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Descrição</label>
                                <div class="col-lg-10">
                                    <textarea type="text" id="skill_description" name="skill_description" class="form-control" ></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            
                            <!-- Campo de Imagem -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Imagem</label>
                                <div class="col-lg-10">
                                    <img src="" alt="" style="max-width: 400px; max-height: 400px;" id="skill_img_path">
                                    <label class="btn  btn-info">
                                        <i class="fa fa-upload"></i>&nbsp;&nbsp;Importar imagem
                                        <input type="file" id="btn_upload_skill_img" accept="image/*" style="display: none;">
                                    </label>
                                    <input id="skill_img" name="skill_img" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            
                            <div class="form-group text-center">
                                <button type="submit" id="btn_save_skill" class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                                </button>
                                <span class="help-block"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal_user" class="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h4 class="modal-title">Habilidades</h4>
                    </div>
                    <div class="modal-body">
                        <!-- Formulário de Cadastro de Usuários -->
                        <form action="" id="form_user">
                            <input type="iduser" hidden>

                            <!-- Campo de Nome -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Nome</label>
                                <div class="col-lg-10">
                                    <input type="text" id="name" name="name" class="form-control" maxlength="100">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            
                            <!-- Campo de Usuário -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Usuário</label>
                                <div class="col-lg-10">
                                    <input type="text" id="user" name="user" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            
                            <!-- Campo de Email -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">E-mail</label>
                                <div class="col-lg-10">
                                    <input type="email"  id="email" name="email" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            
                            <!-- Campo de Confirmação de Email -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Confirmar E-mail</label>
                                <div class="col-lg-10">
                                    <input type="email"  id="confirm_email" name="confirm_email" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <!-- Campo de Senha -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Senha</label>
                                <div class="col-lg-10">
                                    <input type="password" id="password" name="password" class="form-control" ></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <!-- Campo de Confirmar Senha -->
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Confimar senha</label>
                                <div class="col-lg-10">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" ></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" id="btn_save_user" class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                                </button>
                                <span class="help-block"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>