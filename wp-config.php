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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'loja_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '-zk[@nMqom(bZu00?adpgE`bDR7%yRH|J>{*H2u_UURlelvnoci,70Q Uu6h:_a0' );
define( 'SECURE_AUTH_KEY',  '&J>rL^(*JwU7BU2FqZ1p~Rrd]l[f42UmV1>p#U3V_^J$s^WRcixf&jrUZFc7L@nk' );
define( 'LOGGED_IN_KEY',    '@pyYic8KTmUPigm(!+RN:V1lLio#@bS?|.,64PLW3Uk~d{.;!2eHncMuNs+M!Jzm' );
define( 'NONCE_KEY',        'e_YLm2:TaQH`CN-O6B}6 xdgI_IvZ%a2GOGgGECyft e xv3CCqD+-V`|Y*/88tv' );
define( 'AUTH_SALT',        'TmgLY<o9~@Ym0I*@$Jj*]D0;8;+!=^?TMDG0ASRWEfT@C/8hUxk2I:z%C}{-w;@1' );
define( 'SECURE_AUTH_SALT', 'w1=Hh[Py{8=>9gT2c+URjoNoB-o=W eE/2*4HKeG]S+B}W:b_7m&YuIq _;F.:wj' );
define( 'LOGGED_IN_SALT',   'Kpl(dO(9NyatOx,j`~<ox#x?[8F6$)L/~?Pp=E`U 4.TQ2Nb!_,iYK0>?En?(kKg' );
define( 'NONCE_SALT',       'JCq<(zGpbwWzQLSx2C(Su.p~x,9k~O8^DdV2F|nBg6eua<FAjdH<M>3CSV(H?.d.' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
