<nav class="navbar navbar-expand-lg bg-light">
    <!-- @auth -->
        <div class="container">
            <a class="navbar-brand" href="{{ url('admin') }}">Панель администратора</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Категории
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('admin.categories') }}">Все категории</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.categories.create') }}">Добавить
                                    категорию</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Товары
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('products.index') }}">Все товары</a></li>
                            <li><a class="dropdown-item" href="{{ route('products.create') }}">Добавить
                                    товар</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Новости
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('articles.index') }}">Все новости</a></li>
                            <li><a class="dropdown-item" href="{{ route('articles.create') }}">Добавить
                                    новость</a></li>
                        </ul>
                    </li>
                </ul>
                <h4 class="mx-3">admin</h4>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-success" type="submit">Выйти</button>
                </form>

                {{-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                </form> --}}
            </div>
        </div>
    <!-- @endauth -->
</nav>

{{-- <div class="container">
    <div id="content">
        <!-- Begin Content -->
        <div id="element-box" class="login well">
                                <img src="/administrator/templates/isis/images/joomla.png" alt="Администрация муниципального образования «Воленский сельсовет» Харабалинского района Астраханской области" />
                            <hr />
            <div id="system-message-container">
</div>

            <form action="/administrator/index.php" method="post" id="form-login" class="form-inline">
<fieldset class="loginform">
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend input-append">
                <span class="add-on">
                    <span class="icon-user hasTooltip" title="Логин"></span>
                    <label for="mod-login-username" class="element-invisible">
                        Логин						</label>
                </span>
                <input name="username" tabindex="1" id="mod-login-username" type="text" class="input-medium" placeholder="Логин" size="15" autofocus="true" />
                <a href="https://volnoe-adm.ru/index.php?option=com_users&view=remind" class="btn width-auto hasTooltip" title="Забыли логин?">
                    <span class="icon-help"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend input-append">
                <span class="add-on">
                    <span class="icon-lock hasTooltip" title="Пароль"></span>
                    <label for="mod-login-password" class="element-invisible">
                        Пароль						</label>
                </span>
                <input name="passwd" tabindex="2" id="mod-login-password" type="password" class="input-medium" placeholder="Пароль" size="15"/>
                <a href="https://volnoe-adm.ru/index.php?option=com_users&view=reset" class="btn width-auto hasTooltip" title="Забыли пароль?">
                    <span class="icon-help"></span>
                </a>
            </div>
        </div>
    </div>
                        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on">
                        <span class="icon-comment hasTooltip" title="Язык"></span>
                        <label for="lang" class="element-invisible">
                            Язык							</label>
                    </span>
                    <select id="lang" name="lang"  class="advancedSelect">
<option value="" selected="selected">Язык - по умолчанию</option>
<option value="en-GB">English (United Kingdom)</option>
<option value="ru-RU">Русский (Russia)</option>
</select>
                </div>
            </div>
        </div>
            <div class="control-group">
        <div class="controls">
            <div class="btn-group">
                <button tabindex="3" class="btn btn-primary btn-block btn-large login-button">
                    <span class="icon-lock icon-white"></span> Войти					</button>
            </div>
        </div>
    </div>
    <input type="hidden" name="option" value="com_login"/>
    <input type="hidden" name="task" value="login"/>
    <input type="hidden" name="return" value="aW5kZXgucGhw"/>
    <input type="hidden" name="b58c0d0702a92b7d402bfb07a9e5747f" value="1" />	</fieldset>
</form>

        </div> --}}
