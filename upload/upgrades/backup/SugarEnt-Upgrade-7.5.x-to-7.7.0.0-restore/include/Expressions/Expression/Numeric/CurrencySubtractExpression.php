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
 * <b>currencySubtract(Number n, ...)</b><br>
 * Returns the difference of the given currency numbers with a precision of 6 decimal places<br/>
 * ex: <i>currencySubtract(900.00, 200.00, 300.00)</i> = 400.00
 */
class CurrencySubtractExpression extends NumericExpression
{
    /**
     * The Logic for running in PHP, this uses SugarMath as to avoid potential floating-point errors
     *
     * @returns string
     */
    public function evaluate()
    {
        $params = $this->getParameters();
        $diff = $params[0]->evaluate();
        for ($i = 1; $i < sizeof($params); $i++) {
            $diff = SugarMath::init($diff, 6)->sub($params[$i]->evaluate())->result();
        }

        return (string)$diff;
    }

    /**
     * Returns the JS Equivalent of the evaluate function, When in sidecar it uses SugarMath, but when outside of
     * sidecar it uses a custom method to convert the values to a float and then back into a fixed `string` with a
     * precision of 6
     */
    public static function getJSEvaluate()
    {
        return <<<JS
			var params = this.getParameters(),
			diff   = params[0].evaluate();
			for (var i = 1; i < params.length; i++) {
                diff = this.context.currencySubtract(diff, params[i].evaluate());
            }
			return diff;
JS;
    }

    /**
     * Returns the opreation name that this Expression should be
     * called by.
     */
    public static function getOperationName()
    {
        return "currencySubtract";
    }

    /**
     * Returns the String representation of this Expression.
     */
    public function toString()
    {
        $str = "";

        foreach ($this->getParameters() as $expr) {
            if (!$expr instanceof ConstantExpression) {
                $str .= "(";
            }
            $str .= $expr->toString() . " - ";
            if (!$expr instanceof ConstantExpression) {
                $str .= ")";
            }
        }
    }
}
