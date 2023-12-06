<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O gEyG/,LFI5d*0%GxYCVIz8^TPML809R8(<uplV!-]v~1R_jG{*UHe][E7-784_' );
define( 'SECURE_AUTH_KEY',  '^*V7;Eq?v[V[>3oKMYo0{[.%:4gTi4A*RWg_%l{LrS>2MQm5u=BSNvpzQoo%3s^s' );
define( 'LOGGED_IN_KEY',    'Sp9B7`r33eF~so(sN{<+|F ^HnR;b 77$Td%mO/p/&(gF<-qVT2TG6HUh-&oPUlC' );
define( 'NONCE_KEY',        '7z4PT}T~j-m`}<,{f`}YalNUW0OSThF9Wm5bB_l0gF*kDY> {,Fp9$#t|x`76nu{' );
define( 'AUTH_SALT',        'Ib/(nd7]iOy0f{;{;K?,vO[hP=q$/4U#%Zv.V=sXs$;7Iy:u}_>arB0}6jl>E}wU' );
define( 'SECURE_AUTH_SALT', '<yfYT5e3;j8%]aIaZ%tXk@e&n#<ZXbM>S!;kLpDA8L,r>Cnv{SHQSy|xbqlrErY/' );
define( 'LOGGED_IN_SALT',   'Hco~Tf=71:f^+=d9gFpDhye_yDOvQ?iU3)LY-}!:-Z1_7|,y.F;7&[Qw>u}D Uu/' );
define( 'NONCE_SALT',       'IrxH=LKbYo%T}~4CjqZN:%HTxRj?@siQ]y}-:3I5il4@0??:5^TOjXz~}!oTwesv' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
