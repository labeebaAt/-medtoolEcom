from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time
from selenium.webdriver.chrome.options import Options

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/-medtoolEcom/adminDashboard.php")

btn_add= driver.find_element_by_id('add_product_btn')

driver.get("http://localhost/-medtoolEcom/addProduct.php")
driver.maximize_window()
product_name = driver.find_element_by_id('product_name')
product_des = driver.find_element_by_id('product_desc')
product_org_price = driver.find_element_by_id('original_price')
product_sell_price = driver.find_element_by_id('sale_price')
btn_add_submit = driver.find_element_by_id('productSubmitBtn')
btn_add_close = driver.find_element_by_id('close')





product_name.send_keys('labeeba')
product_des.send_keys('bad girl')
product_org_price.send_keys('120')
product_sell_price.send_keys('430')

btn_add_submit.click()
# //
