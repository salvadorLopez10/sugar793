<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_REPLY_ADDR' => '수신 발신',
  'LBL_REPLY_NAME' => '수신자명',

  'LBL_MODULE_NAME' => '캠페인',
    'LBL_MODULE_NAME_SINGULAR'	=> '캠페인:',
    'LBL_MODULE_TITLE' => '캠페인:홈',
  'LBL_NEWSLETTER_TITLE'=>'캠페인:뉴스레터',
  'LBL_EMAIL_TITLE'=>'캠페인 : 이메일',
  'LBL_SEARCH_FORM_TITLE' => '캠페인 검색',
  'LBL_LIST_FORM_TITLE' => '캠페인 목록',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => '뉴스레터 목록',
  'LBL_CAMPAIGN_NAME' => '이름',
  'LBL_CAMPAIGN' => '캠페인',
  'LBL_NAME' => '이름',
  'LBL_INVITEE' => '연락처목록',
  'LBL_LIST_CAMPAIGN_NAME' => '캠페인',
  'LBL_LIST_STATUS' => '상태',
  'LBL_LIST_TYPE' => '유형',
  'LBL_LIST_START_DATE' => '시작일',
  'LBL_LIST_END_DATE' => '완료일',
  'LBL_DATE_ENTERED' => '생성일',
  'LBL_DATE_MODIFIED' => '수정일',
  'LBL_MODIFIED' => '수정자',
  'LBL_CREATED' => '생성자',
  'LBL_TEAM' => '팀',
  'LBL_ASSIGNED_TO' => '담당자',
  'LBL_ASSIGNED_TO_ID' => '담당자',
  'LBL_ASSIGNED_TO_NAME'=> '담당자',
  'LBL_CAMPAIGN_START_DATE' => '시작일',
  'LBL_CAMPAIGN_END_DATE' => '완료일',
  'LBL_CAMPAIGN_STATUS' => '상태',
  'LBL_CAMPAIGN_BUDGET' => '예산',
  'LBL_CAMPAIGN_EXPECTED_COST' => '예상비용',
  'LBL_CAMPAIGN_ACTUAL_COST' => '실제비용',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => '예상매출',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Impressions',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Impression당 비용',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => '클릭당 비용',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' =>'성공 영업기회',
  'LBL_CAMPAIGN_TYPE' => '유형',
  'LBL_CAMPAIGN_OBJECTIVE' => '목적',
  'LBL_CAMPAIGN_CONTENT' => '설명',
  'LBL_CAMPAIGN_DAYS_REMAIN' => '남은 날짜',
  'LBL_CURRENCY_RATE' => '환율',
  'LBL_START_DATE' => '시작일',
  'LBL_END_DATE' => '완료일',
  'LBL_STATUS' => '상태',
  'LBL_TYPE' => '유형',
  'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => "캠페인 &#39;{0}&#39;은 사용불가 상태입니다. 캠페인의 상태를 사용가능상태로 설정하십시요.",
  'LNK_NEW_CAMPAIGN' => '캠페인 새로 만들기(기본)',
  'LNL_NEW_CAMPAIGN_WIZARD' => '캠페인 새로 만들기(마법사)',
  'LNK_CAMPAIGN_LIST' => '캠페인 보기',
  'LNK_NEW_PROSPECT' => '신규 목표 만들기',
  'LNK_PROSPECT_LIST' => '목표고객 보기',
  'LNK_NEW_PROSPECT_LIST' => '신규 목표고객 목록 만들기',
  'LNK_PROSPECT_LIST_LIST' => '목표목록 보기',
  'LBL_MODIFIED_BY' => '수정자:',
  'LBL_CREATED_BY' => '생성자',
  'LBL_DATE_CREATED' => '생성일',
  'LBL_DATE_LAST_MODIFIED' => '수정일',
  'LBL_TRACKER_KEY' => '추적기',
  'LBL_TRACKER_URL' => '추적 URL',
  'LBL_TRACKER_TEXT' => '추적링크 텍스트',
  'LBL_TRACKER_COUNT' => '추적 개수',
  'LBL_REFER_URL' => '추적기 전송(Redirect) URL',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '캠페인',
  'LBL_EMAIL_CAMPAIGNS_TITLE' =>'이메일 캠페인',
  'LBL_NEW_FORM_TITLE' => '신규 캠페인',
  'LBL_TRACKED_URLS'=>'추적 URL목록',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE'=>'추적 URL목록',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE'=>'거래처',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => '목표고객 목록',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => '이메일 마케팅 관리',
  'LNK_NEW_EMAIL_TEMPLATE' => '이메일 템플릿 새로 만들기',
  'LNK_EMAIL_TEMPLATE_LIST' => '이메일 템플릿 보기',
  'LBL_TRACK_BUTTON_TITLE' =>'상태 보기',
  'LBL_TRACK_BUTTON_KEY' =>'T',
  'LBL_TRACK_BUTTON_LABEL' =>'상태 보기',
  'LBL_QUEUE_BUTTON_TITLE'=>'이메일 전송',
  'LBL_QUEUE_BUTTON_KEY'=>'u',
  'LBL_QUEUE_BUTTON_LABEL'=>'이메일 전송',
  'LBL_TEST_BUTTON_TITLE'=>'시범 전송',
  'LBL_TEST_BUTTON_KEY'=>'e',
  'LBL_TEST_BUTTON_LABEL'=>'시범 전송',
  'LBL_COPY_AND_PASTE_CODE' => '또는 html을 페이지에 복사해 붙여넣기',
  'LBL_CHARSET_NOTICE' => '주의: 웹투리드 양식이 <head> 섹션 다음 라인들을 포함하도록 하십시오.',

  'LBL_TODETAIL_BUTTON_TITLE'=>'세부내용 보기',
  'LBL_TODETAIL_BUTTON_KEY'=>'T',
  'LBL_TODETAIL_BUTTON_LABEL'=>'세부내용 보기',

  'LBL_DEFAULT'=>'전체 목표고객 목록',
  'LBL_MESSAGE_QUEUE_TITLE'=>'대기 메세지',
  'LBL_LOG_ENTRIES_TITLE'=>'응답 목록',

  'LBL_LOG_ENTRIES_TARGETED_TITLE'=>'메세지 전송/시도',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE'=>'반송 메세지, 기타',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE'=>'반송 메세지, 유효하지 않은 이메일',
  'LBL_LOG_ENTRIES_LINK_TITLE'=>'링크확인',
  'LBL_LOG_ENTRIES_VIEWED_TITLE'=>'수신확인 메세지',
  'LBL_LOG_ENTRIES_REMOVED_TITLE'=>'수신거부',
  'LBL_LOG_ENTRIES_LEAD_TITLE'=>'관심고객 새로 만들기',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE'=>'관심고객',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE'=>'영업기회',
  'LBL_LOG_ENTRIES_CONTACT_TITLE'=>'신규 연락처 생성완료',

  'LBL_BACK_TO_CAMPAIGNS'=>'캠페인으로 돌아가기',
  //error messages.
  'ERR_NO_EMAIL_MARKETING'=>'캠페인과 관련된 최소 하나 이상의 이메일 마케팅 메세지가 있어야합니다.',
  'ERR_NO_TARGET_LISTS'=>'캠페인과 관련된 최소 하나 이상의 목표고객 목록이 있어야합니다.',
  'ERR_NO_TEST_TARGET_LISTS'=>'캠페인과 관련된 최소 하나 이상의 테스트 목표고객 목록이 있어야합니다.',
  'ERR_SENDING_NOW'=>'메세지가 전송중입니다. 나중에 다시 시도해주십시오.',
  'ERR_MESS_NOT_FOUND_FOR_LIST'=>'이 목표고객 목록에서 발견된 이메일 마케팅 메세지가 없습니다.',
  'ERR_MESS_DUPLICATE_FOR_LIST'=>'이 목표고객 목록에 하나 이상의 이메일 마케팅 메세지가 정의되었습니다.',
  'ERR_FIX_MESSAGES'=>'진행전 다음 오류를 수정하십시오.',

  'LBL_TRACK_DELETE_BUTTON_KEY'=>'D',
  'LBL_TRACK_ROI_BUTTON_LABEL' =>'ROI 보기',
  'LBL_TRACK_DELETE_BUTTON_TITLE'=>'테스트 항목 삭제하기',
  'LBL_TRACK_DELETE_BUTTON_LABEL'=>'테스트 항목 삭제하기',
  'LBL_TRACK_DELETE_CONFIRM'=>'이 선택은 시범실행시 생성된 일지 항목을 삭제합니다. 계속하시겠습니까?',
  'ERR_NO_MAILBOX'=>"다음 마케팅 메세지는 관련된 메일계정이 없습니다. 진행전 다음 오류를 수정하십시오.",
  'LBL_LIST_TO_ACTIVITY'=>'상태 보기',
  'LBL_CURRENCY_ID'=>'통화 ID',
  'LBL_CURRENCY'=>'통화',
  'LBL_ROLLOVER_VIEW' => '세부사항을 보려면 바위에 마우스를 올리십시오.',
  'LBL_TARGETED' => '대상선정됨',
  'LBL_TOTAL_TARGETED' => '최종 대상선정됨',
  'LBL_CAMPAIGN_FREQUENCY'=>'횟수',
  'LBL_NEWSLETTERS'=>'뉴스레터 보기',
  'LBL_NEWSLETTER'=>'뉴스레터',
  'LBL_NEWSLETTER_FORENTRY'=>'뉴스레터',
  'LBL_MORE_DETAILS' => '세부사항 더 보기',
  'LBL_CREATE_NEWSLETTER'=>'신규 뉴스레터 만들기',
  'LBL_CREATE_EMAIL'=>'이메일 만들기',
  'LBL_LIST_NAME' => '이름',
  'LBL_STATUS_TEXT' =>  '상태' ,
  'LBL_FROM_MAILBOX_NAME'=>'메일계정 사용하기',
  'LBL_FROM_NAME' => '발신인',
  'LBL_START_DATE_TIME' => '시작 날짜/시간',
  'LBL_DATE_START' => '시작 날짜',
  'LBL_TIME_START' => '시작 시간',
  'LBL_TEMPLATE' => '이메일 템플릿',
  'LBL_CREATE_EMAIL_TEMPLATE'=> '새로 만들기',
  'LBL_MESSAGE_FOR' => '메세지 수신자',
  'LBL_FINISH' => '완료',
  'LBL_ALL_PROSPECT_LISTS'=>'캠페인의 전체 목표 목록',
  'LBL_EDIT_EMAIL_TEMPLATE'=>   '편집하기',
  'LBL_EMAIL_SETUP_WIZARD'=>   '이메일 설정',
  'LBL_DIAGNOSTIC_WIZARD'=>   '진단 보기',
  'LBL_ALREADY_SUBSCRIBED_HEADER'=>'뉴스레터구독',
  'LBL_UNSUBSCRIBED_HEADER'=>'뉴스레터 구독/구독 취소',
  'LBL_UNSUBSCRIBED_HEADER_EXPL'=>'제공되는 뉴스레터/목록으로 미구독 뉴스레터로 뉴스레터를 이동하면 이 뉴스레터에 대한 미구독 목록에 연락처를 추가하게 됩니다. 원래의 구독 목록 또는 대상 목록에서 연락처를 삭제하지 않습니다.',
  'LBL_FILTER_CHART_BY'=>'필터 도표',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE'=>'구독신청 관리',
  'LBL_MARK_AS_SENT' =>'전송완료 표시',
  'LBL_DEFAULT_LIST_NOT_FOUND'=>'기본 유형의 목표 목록이 발견되지 않았습니다.',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND'=>'항목이 발견되지 않았습니다.',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => '항목이 진행되었습니다.',
  //newsletter wizard
  'LBL_EDIT_TRACKER_NAME'=>'추적기명',
  'LBL_EDIT_TRACKER_URL'=>'추적 URL',
  'LBL_EDIT_OPT_OUT_'=>'수신거부 링크?',
  'LBL_EDIT_OPT_OUT'=>'수신거부 링크',
  'LBL_UNSUBSCRIPTION_LIST_NAME'=>'구독 취소 목록명',
  'LBL_SUBSCRIPTION_LIST_NAME'=>'구독 목록명',
  'LBL_TEST_LIST_NAME'=>'테스트 목록명',
  'LBL_UNSUBSCRIPTION_TYPE_NAME'=>'구독 취소',
  'LBL_SUBSCRIPTION_TYPE_NAME'=>'구독',
  'LBL_TEST_TYPE_NAME'=>'테스트',
  'LBL_UNSUBSCRIPTION_LIST'=>'구독 취소 목록',
  'LBL_SUBSCRIPTION_LIST'=>'구독 목록',
   'LBL_MRKT_NAME' => '이름',
  'LBL_TEST_LIST'=>'테스트 목록',
  'LBL_WIZARD_HEADER_MESSAGE' => '캠페인 필수 필드 채우기',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'ROI 계산을 위한 예산을 입력하십시오',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => '각가의 뉴스레터는 반드시 세가지 목표 목록이 있어야합니다. (구독, 구독 취소, 테스트).',
  'LBL_WIZARD_TARGET_MESSAGE1' => '캠페인에 사용할 목표고객목록을 새로 만들거나 선택하십시오. 이 목록은 마케팅 메세지가 이메일과 함께 전송될때 사용됩니다.',
  'LBL_WIZARD_TARGET_MESSAGE2' => '또는 아래 형식을 이용해 새로 만들기',
  'LBL_WIZARD_TRACKER_MESSAGE' => '이 캠페인에 사용할 추적 URL을 정의하십시오. 추적기를 만들기 위한 이름과 URL을 반드시 입력해야합니다.',
  'LBL_WIZARD_MARKETING_MESSAGE' => '뉴스레터를 위한 이메일 예를 새로 만들기위한 아래 형식을 채우십시오. 이는 뉴스레터가 언제 어떻게 분배될지에 대한 정보를 명시하도록 허용합니다.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => '이것은 진행중 마지막 단계입니다. 테스트 이메일 전송, 소식지 분배일정 또는 변경사항을 저장후 개요페이지로 진행하려면 선택하십시오.',
  'LBL_HOME_START_MESSAGE' => '만들고자하는 캠페인 유형을 선택하십시오.',
  'LBL_WIZARD_LAST_STEP_MESSAGE'=> '마지막 단계에 있습니다.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE'=>'처음 단계에 있습니다.',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => '캠페인 머리글',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => '캠페인 예산',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => '캠페인 추적 URL',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => '구독 정보',
  'LBL_WIZ_MARKETING_TITLE' => '마케팅 이메일',
  'LBL_WIZ_SENDMAIL_TITLE' => '이메일 전송',
  'LBL_WIZ_TEST_EMAIL_TITLE' => '테스트 이메일',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => '개요',
  'LBL_NAVIGATION_MENU_GEN1' => '캠페인 머리글',
  'LBL_NAVIGATION_MENU_GEN2' => '예산',
  'LBL_NAVIGATION_MENU_TRACKERS' => '추적장치',
  'LBL_NAVIGATION_MENU_MARKETING' => '마케팅',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => '이메일 전송',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => '구독',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' =>  '이는 캠페인의 구독유형의 목표목록을 정의합니다. <br />이 목표목록은 캠페인을 위한 이메일 전송시 사용됩니다. <br />만약 목록이 준비되지 않았다면 빈 목록이 만들어집니다.',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => '이는 캠페인의 구독해지 유형의 목표목록을 정의합니다. <br />이 목표목록은 캠페인을 제외한 모든이들의 이름을 포함하며 이메일로 연락할수 없습니다.  <br />만약 목록이 준비되지 않았다면 빈 목록이 만들어집니다.',
  'LBL_TEST_TARGET_WIZARD_DESC' => '이는 캠페인의 테스트 유형의 목표목록을 정의합니다. <br />이 목표목록은 캠페인을 위한 이메일 전송시 사용됩니다. <br />만약 목록이 준비되지 않았다면 빈 목록이 만들어집니다.',
  'LBL_TRACKERS' => '추적장치',
  'LBL_ADD_TRACKER' => '추적기 새로 만들기',
  'LBL_ADD_TARGET' => '추가하기',
  'LBL_CREATE_TARGET'=> '새로 만들기',
  'LBL_SELECT_TARGET'=> '기존 목표목록 사용하기',
  'LBL_REMOVE' => '삭제',
  'LBL_CONFIRM' => '시작',
  'LBL_START' => '시작',
  'LBL_TOTAL_ENTRIES' => '항목',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => '작업을 저장하고 마케팅 이메일로 진행합니다.',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => '선택사항 저장하기',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => '정보저장후 나가시겠습니까?',
  'LBL_CONFIRM_SEND_SAVE' => '이곳을 나가 캠페인 이메일 보내기 페이지로 진행합니다. 저장후 계속하시겠습니까?',
  'LBL_NEWSLETTER WIZARD_TITLE' => '뉴스레터',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => '뉴스레터 편집하기',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => '캠페인 편집하기',
  'LBL_SEND_AS_TEST' => '테스트용 마케팅 이메일 보내기',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => '완료',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => '저장 후 계속하기',
  'LBL_TARGET_LISTS' => '목표고객 목록',
  'LBL_NO_SUBS_ENTRIES_WARNING' => '구독목록에 최소 하나이상의 항목이 있을때까지 마케팅 이메일을 보낼수 없습니다. 완료후 목록을 채울수 있습니다.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => '목표목록에 최소 하나이상의 항목이 있을때까지 마케팅 이메일을 보낼수 없습니다. 완료후 목록을 채울수 있습니다.',
  'LBL_NO_TARGETS_WARNING' => '캠페인에 최소 하나이상의 목표목록이 있을때까지 마케팅 이메일을 보낼수 없습니다.',
  'LBL_NONE' => '없음',
  'LBL_CAMPAIGN_WIZARD' => '캠페인 마법사',
  'LBL_EMAIL' =>'이메일',
  'LBL_OTHER_TYPE_CAMPAIGN' => '이메일에 근거하지 않은 캠페인',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => '캠페인 유형',
  'LBL_TARGET_LIST' => '목표고객 목록',
  'LBL_TARGET_TYPE' => '목료목록 유형',
  'LBL_TARGET_NAME' => '목표고객 목록 이름',
  'LBL_EMAILS_SCHEDULED' => '예정된 이메일',
  'LBL_TEST_EMAILS_SENT' => '이메일 전송 테스트',
  'LBL_USERS_CANNOT_OPTOUT' => '시스템 사용자는 이메일 수신을 거부할수 없습니다.',
  'LBL_ELECTED_TO_OPTOUT' => '이메일 수신을 거부를 결정했습니다.',
  'LBL_COPY_OF' => '복사',
  'LBL_SAVED_SEARCH' => '검색과 레이아웃 저장',
  //email setup wizard
  'LBL_WIZ_FROM_NAME'                         => '발신자명',
  'LBL_WIZ_FROM_ADDRESS'                      => '발신자 주소',
  'LBL_EMAILS_PER_RUN'                        => '배치를 통해 일정개수의 이메일이 보내졌습니다.',
  'LBL_CUSTOM_LOCATION'                       => '정의된 사용자',
  'LBL_DEFAULT_LOCATION'                      => '기본',
  'ERR_INT_ONLY_EMAIL_PER_RUN'                => '배치당 보내질 이메일 수는 정수여야 합니다.',
  'LBL_LOCATION_TRACK'                        => '캠페인 추적 파일 위치',
  'LBL_MAIL_SENDTYPE'                         => '메일 전송 에이전트',
  'LBL_MAIL_SMTPAUTH_REQ'                     => 'SMTP 인증서를 사용하시겠습니까?',
  'LBL_MAIL_SMTPPASS'                         => 'SMTP 비밀번호',
  'LBL_MAIL_SMTPPORT'                         => 'SMTP 포트:',
  'LBL_MAIL_SMTPSERVER'                       => 'SMTP 서버:',
  'LBL_MAIL_SMTPUSER'                         => 'SMTP 사용자명:',
  'LBL_EMAIL_SETUP_WIZARD_TITLE'              => '캠페인을 위한 이메일 설정',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'   => 'Config.php의 site_url 값',
  'LBL_NOTIFY_TITLE'                          => '이메일 통지 선택항목',
  'LBL_MASS_MAILING_TITLE' => '대용량 메일 선택항목',
  'LBL_SERVER_TYPE'                           => '메일 서버 통신규약/접속순서',
  'LBL_SERVER_URL'                            => '메일 서버 주소',
  'LBL_LOGIN'                                 => '사용자명',
  'LBL_PORT'                                  => '메일 서버포트',
  'LBL_MAILBOX_NAME'                          => '메일 계정 이름',
  'LBL_PASSWORD'                              => '비밀번호:',
  'LBL_MAILBOX_DEFAULT'                       => '편지함',
  'LBL_MAILBOX'                               => '모니터되는 폴더',
  'LBL_NAVIGATION_MENU_SETUP'                 => '이메일 설정',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX'           => '신규 메일 계정',
  'LBL_NAVIGATION_MENU_SUMMARY'               => '요약',
  'LBL_MAILBOX_CHECK_WIZ_GOOD'                => '반송 처리하는 메일 계정이 발견되었습니다. 반드시 새로 만들필요는 없지만 아래에  만들수 있습니다.',
  'LBL_MAILBOX_CHECK_WIZ_BAD'                 => '반송처리되는 메일 계정이 발견되지 않았습니다. 아래 새로 만들기 하십시오.',
  'LBL_CAMP_MESSAGE_COPY'                     => '캠페인 메세지 복사본 저장',
  'LBL_CAMP_MESSAGE_COPY_DESC'                     => '모든 캠페인동안 보내진 각각의 이메일 메세지의 전체 복사본을 저장하시겠습니까? 저장하지 않는 초기설정을 권장합니다. 이는 전송이 되었거나 각각의 메세지 재생성시 변이가 필요한 템플릿만 저장합니다.',
  'LBL_YES'                                   => '예',
  'LBL_NO'                                    => '아니오',
  'LBL_FROM_ADDR'                             => '발신 주소',
  'LBL_DEFAULT_FROM_ADDR'                     => '초기설정',
  'LBL_EMAIL_SETUP_DESC'                      => '캠페인 이메일이 전송될수 있도록 시스템 설정을 수정하는 아래 양식을 채우십시오.',
  'LBL_CREATE_MAILBOX'                        => '신규 메일 계정 만들기',
  'LBL_SSL_DESC'                              => '만약 귀하의 메일 서버가 보안 소켓을 지원한다면 이 작동은 이메일 가져올때 SSL연결을 강요합니다.',
  'LBL_SSL'                                   => 'SSL 사용',
  //campaign diagnostics
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => '캠페인이 의도대로 기능하지 않을수 있으며 이메일에 다음의 이유로 전송되지 않을수 있습니다.',
  'LBL_CAMPAIGN_DIAGNOSTICS'  => '캠페인 진단',
  'LBL_DIAGNOSTIC'            => '진단',
  'LBL_MAILBOX_CHECK1_GOOD'   => '반송 처리하는 메일계정이 발견되었습니다.',
  'LBL_MAILBOX_CHECK1_BAD'    => '반송 처리하는 메일 계정이 발견되지 않았습니다.',
  'LBL_MAILBOX_CHECK2_GOOD'   => '이메일 설정이 형성되지 않았습니다.',
  'LBL_MAILBOX_CHECK2_BAD'    => '귀하의 시스템 이메일 주소를 형성하십시오. 이메일 설정이 형성되지 않았거나 유효하지 않습니다.',
  'LBL_SCHEDULER_CHECK_GOOD' => '일정관리가 발견되었습니다.',
  'LBL_SCHEDULER_CHECK_BAD' =>   '일정관리가 발견되지 않았습니다.',
  'LBL_SCHEDULER_CHECK1_BAD'  => '반송된 캠페인 이메일 진행을 위한 일정관리가 설정되지 않았습니다.',
  'LBL_SCHEDULER_CHECK2_BAD'  => '캠페인 이메일 진행을 위한 일정관리가 설정되지 않았습니다.',
  'LBL_SCHEDULER_NAME' =>   '일정 관리',
  'LBL_SCHEDULER_STATUS' =>   '상태',
  'LBL_MARKETING_CHECK1_GOOD' => '이메일 마케팅 구성요소가 발견되었습니다.',
  'LBL_MARKETING_CHECK1_BAD'  => '이메일 마케팅 구성요소가 발견되지 않았으며 캠페인 메일을 보내려면 새로 만들어야합니다.',
  'LBL_MARKETING_CHECK2_GOOD' => '목표 목록이 발견되었습니다.',
  'LBL_MARKETING_CHECK2_BAD'  => '목표 목록이 발견되지 않았으며 원하는 캠페인 화면으로부터 새로 만들어야 합니다.',
  'LBL_EMAIL_SETUP_WIZ' => '이메일 설정 시작',
  'LBL_SCHEDULER_LINK' => '일정관리자 화면으로 이동',
  'LBL_TO_WIZARD' => '시작',
  'LBL_TO_WIZARD_TITLE' => '시작 마법사',
  'LBL_EDIT_EXISTING' => '캠페인 편집하기',
  'LBL_EDIT_TARGET_LIST' => '목표목록 편집하기',
  'LBL_SEND_EMAIL'  => '이메일 일정',
  'LBL_USE_EXISTING'  => '기존물 사용',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => '신규 마케팅 이메일 만들기',
  'LBL_CHOOSE_NEXT_STEP'  => '다음 단계를 선택하십시오.',
  'LBL_NON_ADMIN_ERROR_MSG'  => '이 문제를 수정할수 있도록 시스템 관리자에 통지하십시오.',
  'LBL_EMAIL_COMPONENTS' => '이메일 구성요소',
  'LBL_SCHEDULER_COMPONENTS' => '일정관리 구성요소',
  'LBL_RECHECK_BTN'=>'재확인',
  //web to lead wizard titles
    'LBL_WEB_TO_LEAD_FORM_TITLE1' => '관심고객 양식 새로 만들기:필드 선택',
    'LBL_WEB_TO_LEAD_FORM_TITLE2' => '관심고객 새로만들기:소유권 양식',
    'LBL_DRAG_DROP_COLUMNS' => '관심고객 필드 1&2열에 끌어와 내리기',
    'LBL_DEFINE_LEAD_HEADER' => '양식 머리글',
    'LBL_LEAD_DEFAULT_HEADER' => '캠페인을 위한 관심고객 양식 웹',
    'LBL_DEFINE_LEAD_SUBMIT' => '버튼 라벨 제출',
    'LBL_DEFINE_LEAD_POST_URL' => 'URL 게시',
    'LBL_EDIT_LEAD_POST_URL' => 'URL 게시를 편집하시겠습니까?',
    'LBL_DEFINE_LEAD_REDIRECT_URL' => 'URL 전송',
    'LBL_LEAD_NOTIFY_CAMPAIGN' => '관련 캠페인',
    'LBL_DEFAULT_LEAD_SUBMIT' => '제출',
    'LBL_WEB_TO_LEAD'    =>  '관심고객 양식 새로 만들기',
    'LBL_LEAD_FOOTER' => '양식 바닥글',
    'LBL_CAMPAIGN_NOT_SELECTED' => '선택후 캠페인과 연결',
    'NTC_NO_LEGENDS' => '없음',
    'NTC_DELETE_CONFIRMATION' => '이 기록을 삭제하시겠습니까?',
    'LBL_SELECT_LEAD_FIELDS' => '사용가능한 필드에서 선택하십시오.',
    'LBL_DESCRIPTION_LEAD_FORM' => '양식 설명',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => '이 양식제출은 신규 관심고객을 만들며 캠페인과 연결됩니다.',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' =>'귀하의 웹에서 웹투리드 양식을 다운로드 하십시오,',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' =>'웹투리드 양식',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' =>'모든 필수항목 필드를 입력하십시오.',
    'LBL_NOT_VALID_EMAIL_ADDRESS' =>'유효한 이메일 주소가 아닙니다.',
    'LBL_AVALAIBLE_FIELDS_HEADER' => '사용가능한 필드',
    'LBL_LEAD_FORM_FIRST_HEADER' => '관심고객 양식(첫번째 열)',
    'LBL_LEAD_FORM_SECOND_HEADER' =>'관심고객 양식(두번째 열)',
    'LBL_LEAD_MODULE'  => '관심고객',
    'LBL_CREATE_WEB_TO_LEAD_FORM' => '관심고객을 위한 웹투리드 양식 만들기',
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => '필수항목 필드를 선택하십시오.',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' =>'캠페인 ROI(투자대비효과)',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY'=>'수신자 활동에 의한 캠페인 응답',
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE'=>'이메일 주소나 도메인에 의해 거부',

    'LBL_AMOUNT_IN' => '금액',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => '매출',
    'LBL_ROI_CHART_INVESTMENT' => '투자',
    'LBL_ROI_CHART_BUDGET' => '예산',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => '예상 매출',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => '상위 캠페인',
    'LBL_TOP_CAMPAIGNS_NAME' => '캠페인명',
    'LBL_TOP_CAMPAIGNS_REVENUE' => '매출',
    'LBL_TOP_CAMPAIGNS_DESCRIPTION' => '매출별 캠페인 성과',
    'LBL_LEADS' => '관심고객',
    'LBL_CONTACTS'	=>	'연락처목록',
    'LBL_ACCOUNTS'	=>	'거래처 목록',
    'LBL_OPPORTUNITIES'	=>	'영업기회 목록',
    'LBL_CREATED_USER' => '생성자',
    'LBL_MODIFIED_USER' => '수정자',
    'LBL_LOG_ENTRIES' => '항목 일지',
    'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => '잠재고객 목록',
    'LBL_EMAILMARKETING_SUBPANEL_TITLE' => '이메일 마케팅 관리',
    'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => '큐 추적(Track Queue)',
    'LBL_TARGETED_SUBPANEL_TITLE' => '대상선정됨',
    'LBL_VIEWED_SUBPANEL_TITLE' => '보여짐',
    'LBL_LINK_SUBPANEL_TITLE' => '링크',
    'LBL_LEAD_SUBPANEL_TITLE' => '관심고객',
    'LBL_CONTACT_SUBPANEL_TITLE' => '연락처',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => '올바르지 않은 이메일',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => '전송 오류',
    'LBL_REMOVED_SUBPANEL_TITLE' => '제거됨',
    'LBL_BLOCKED_SUBPANEL_TITLE' => '막힘',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '거래처',
    'LBL_LEADS_SUBPANEL_TITLE' => '관심고객 목록',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '영업기회 목록',

    'LBL_IMPORT_PROSPECTS'=>'목표고객명단 가져오기',
    'LBL_LEAD_FORM_WIZARD' => '관심고객 양식 마법사',
    'LBL_CAMPAIGN_INFORMATION' => '기본정보',

	'LBL_MONTH' => "월",
	'LBL_YEAR' 	=> "년",
	'LBL_DAY' 	=> "일",
	'LBL_EDIT_LAYOUT' => '레이아웃 편집하기' /*for 508 compliance fix*/,
	'LBL_INVALID' => '무효' /*for 508 compliance fix*/,
	'LBL_VALID' => '유효' /*for 508 compliance fix*/,
	'LBL_ALERT' => '알림' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => '편집하기' /*for 508 compliance fix*/,
	'LBL_DELETE_INLINE' => '삭제하기' /*for 508 compliance fix*/,
	'LBL_DELETE' => '제거하기' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => '보기',
    'ERR_NO_OPTS_SAVED'		=> '수신 이메일 계정과 저장된 최적의 조건이 없습니다.',
    'ERR_REVIEW_EMAIL_SETTINGS' => '수신 이메일 설정을 재검토하십시오.',
    'LBL_LEADS_DELETED_SINCE_CREATED' => '이 캠페인을 통해 생성된 0주 예비고객이 생성시부터 삭제되었습니다.',
);


?>
