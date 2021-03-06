<?php
/**
 * Elgg developer tools 日本語 language file.
 *
 * @update 2013-5-1
 * @version 1.8.15
 * @subpackage Languages.Japanese
 */

$japanese = array(
	// menu
	'admin:develop_tools' => 'ツール',
	'admin:develop_tools:preview' => 'テーマの見本',
	'admin:develop_tools:inspect' => '内部を見る',
	'admin:develop_tools:unit_tests' => 'ユニットテスト',
	'admin:developers' => '開発者',
	'admin:developers:settings' => 'セッティング',

	// settings
	'elgg_dev_tools:settings:explanation' => '開発とデバッグの設定をしてください。いくつかのセッティングは別のadminページででも行えます。',
	'developers:label:simple_cache' => 'Simple cacheを使用する',
	'developers:help:simple_cache' => '開発中はファイルキャシュをオフにしてください。せっかくview（cssも含む）を変更しても、それが反映されないことがあります。',
	'developers:label:system_cache' => 'システムキャッシュを使用する',
	'developers:help:system_cache' => '開発中は、これをオフにしてください。せっかくプラグインの変更を行なっても、登録されないでしょう。',
	'developers:label:debug_level' => "トレースレベル",
	'developers:help:debug_level' => "ログ情報の量を調節します。詳しくは、elgg_log()を参照してください。",
	'developers:label:display_errors' => '致命的なPHPエラーを表示します',
	'developers:help:display_errors' => "デフォルトでは、Elggの .htaccessファイルが致命的エラーの表示を抑制しています。",
	'developers:label:screen_log' => "画面にログを出力",
	'developers:help:screen_log' => "webページにelgg_log()とelgg_dump()の出力を表示します。",
	'developers:label:show_strings' => "翻訳を表示する代わりに翻訳キーを表示します",
	'developers:help:show_strings' => "elgg_echo()で使われる翻訳キー(\$message_key)を表示します。",
	'developers:label:wrap_views' => "Wrap views",
	'developers:help:wrap_views' => "ほとんど全てのviewにHTMLコメントをつけます（HTMLコメントブロックでviewを挟みます）。ある特定のHTMLを作成するview（訳注：の名前）を見つけ出すのに便利です。（訳注：ウェブブラウザFirefoxのプラグインFirebugなどを使用します。）ただし、この機能はデフォルトveiwtypeの non-HTML views を崩してしまうことがあります。詳細は、 developers_wrap_views() を参照してください。",
	'developers:label:log_events' => "イベントとプラグインhooksを記録する",
	'developers:help:log_events' => "イベントとプラグインhooksをログに記録します。【警告】１ページでも、たくさん吐き出しますので注意してください。",

	'developers:debug:off' => 'Off',
	'developers:debug:error' => 'Error',
	'developers:debug:warning' => 'Warning',
	'developers:debug:notice' => 'Notice',
	
	// inspection
	'developers:inspect:help' => 'Elggフレームワークの構築設定を覗いてみる',

	// event logging
	'developers:event_log_msg' => "%s: '%s, %s' in %s",

	// theme preview
	'theme_preview:general' => 'イントロダクション',
	'theme_preview:breakout' => 'iframe外で表示する',
	'theme_preview:buttons' => 'ボダン',
	'theme_preview:components' => 'コンポーネント',
	'theme_preview:forms' => 'フォーム',
	'theme_preview:grid' => 'グリッド',
	'theme_preview:icons' => 'アイコン',
	'theme_preview:modules' => 'モジュール',
	'theme_preview:navigation' => 'ナビゲーション',
	'theme_preview:typography' => '文字の体裁',
	'theme_preview:miscellaneous' => 'その他',

	// unit tests
	'developers:unit_tests:description' => 'コアクラスとコア関数のバグを検出するために、Elggにはユニットテストと統合テストがあります。',
	'developers:unit_tests:warning' => '【警告】 実際のサイトでこのテストを実行してはいけません。データベースが壊れてしまう可能性があります。',
	'developers:unit_tests:run' => '実行',

	// status messages
	'developers:settings:success' => '設定を保存しました',
);

add_translation('ja', $japanese);
