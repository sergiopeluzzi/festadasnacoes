<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            @if (Auth::guest())
                <div class="pull-left info">
                    <p>Usuário não logado</p>
                </div>
            @else
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <a><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            @endif

        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            @is('administrador')
            <li class="header">PESSOAS</li>
            <li><a href="/admin/clientes"><i class="fa fa-male"></i>Clientes</a></li>
            <li><a href="/admin/funcionarios"><i class="fa fa-male"></i>Funcionários</a></li>

            <li class="header">CADASTROS</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Evento</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/eventos"><i class="fa"></i> Evento</a></li>
                    <li><a href="/admin/nacoes"><i class="fa"></i> Nação</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Produtos</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/unidades"><i class="fa"></i> Unidades</a></li>
                    <li><a href="/admin/produtos"><i class="fa"></i> Produtos</a></li>
                    <li><a href="/admin/pratos"><i class="fa"></i> Prato</a></li>
                    <!--<li><a href="/admin/bebidas"><i class="fa"></i> Bebida</a></li>-->
                    <li><a href="/admin/cardapios"><i class="fa"></i> Cardápio</a></li>
                </ul>
            </li>
            @endis
            @is('administrador', 'funcionario')
            <li class="header">GERENCIAMENTO</li>
            <li><a href="/admin/producao"><i class="fa fa-bar-chart-o"></i> Gerenciar Produção</a></li>
            <li><a href="/admin/vendas"><i class="fa fa-money"></i> Gerenciar Vendas</a></li>
            @endis
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>