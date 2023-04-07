public class arrayindexoutofbounds 
{
	public static void main(String[] args) 
	{
		try
		{
			int ar[] = new int[5];
			ar[6] = 5;
		}
		catch(ArrayIndexOutOfBoundsException e)
		{
			System.out.println("Array Index Out Of Bounds Exeception");
			System.out.println("Exeception Thrown:" + e);
			System.out.println("system-error-msg" + e.getMessage());
		}
		catch(ArithmeticException e)
		{
			System.out.println("Arthimetic Exeception");
			System.out.println("system-error-msg" + e.getMessage());
			System.out.println("user message : divided by Zero");
		}
	}
}
