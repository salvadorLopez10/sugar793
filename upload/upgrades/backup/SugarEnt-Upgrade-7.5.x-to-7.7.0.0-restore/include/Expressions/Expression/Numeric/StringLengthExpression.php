<?php
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
require_once("include/Expressions/Expression/Numeric/NumericExpression.php");
/**
 * <b>strlen(String s)</b><br>
 * Returns the number of characters in the String <i>s</i>.<br/>
 * ex: <i>strlen("Hello")</i> = 5
 */
class StringLengthExpression extends NumericExpression {
	
	/**
	 * Returns the negative of the expression that it contains.
	 */
	function evaluate() {
		return strlen( $this->getParameters()->evaluate() );
	}
	
	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
			var p = this.getParameters().evaluate() + "";
			return p.length;
EOQ;
	}
	
	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "strlen";
	}
	
	/**
	 * Returns the exact number of parameters needed.
	 */
	static function getParamCount() {
		return 1;
	}
	
	/**
	 * All parameters have to be a string.
	 */
    static function getParameterTypes() {
		return AbstractExpression::$STRING_TYPE;
	}
}
?>