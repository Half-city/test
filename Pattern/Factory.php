<?php
// namespace Pattern;

// use Pattern\Database\SingleCase;
/**
 * 工厂模式   不直接new对象  通过这个类来完成获取对象   统一获取
 */
class Factory 
{
	static public function createDatabase()
	{
		
		return 1;
	}
}